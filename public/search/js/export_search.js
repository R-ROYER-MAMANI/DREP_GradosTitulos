export class search{
        constructor(myurlp, mysearchp, ul_add_lip){
            this.url = myurlp;
            this.mysearch = mysearchp;
            this.ul_add_li = ul_add_lip;
            this.idli = "mylist";
            this.pcantidad = document.querySelector("#pcantidad");
        }

        InputSearch(){
                this.mysearch.addEventListener("input", (e) =>{
                    e.preventDefault();
                    try{
                            let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                            let minimo_letras = 7;
                            let valor = this.mysearch.value;
                            // console.log(valor);
                            if(valor.length > minimo_letras){
                                let datasearch= new FormData();
                                datasearch.append("valor",valor);
                                fetch(this.url,{
                                        headers:{
                                                "X-CSRF-TOKEN": token,
                                        },
                                        method:"post",
                                        body:datasearch
                                })
                                .then((data) => data.json())
                                .then((data) => {
                                        console.log(data);
                                        this.Showlist(data, valor);
                                })
                                .catch(function (error){
                                console.error("Error:", error);
                                });

                            }else{
                                this.ul_add_li.style.display = "";
                            }
                    } catch (error) {
                        console.log(error);
                    }
                });
        }

        Showlist(data,valor){
                this.ul_add_li.style.display = "block";
                if (data.estado == 1){
                        if (data.result != ""){
                                let arrayp = data.result;
                                this.ul_add_li.innerHTML = "";
                                let n = 0;
                                this.Show_list_each_data(arrayp,valor,n);
                                let adclasli = document.getElementById("1"+this.idli);
                                adclasli.classList.add('selected');
                        }else{
                                this.ul_add_li.innerHTML = "";
                                this.ul_add_li.innerHTML += `
                                        <p style="color:red;"><br>El registro no se encuentra en la Base Datos</p>
                                `;        
                        }
                }
        }

        Show_list_each_data(arrayp,valor,n){
                for (let item of arrayp){
                        n++;
                        let nombre = item.NOMBRES;
                        let apt = item.APE_PAT;
                        let apm = item.APE_MAT;
                        let nomt = item.NOMBRE_TITU;
                        let tfecha = item.TITU_FEC;
                        // let nominst = item.nombreinstitucion_id;
                        // class="col-xs-12 col-sm-12 col-md-12
                        this.ul_add_li.innerHTML += `
                        <li id="${n+this.idli}" value="${item.nombre}" class="list-group-item" style="">
                        <div class="d-flex flex-row" style="">
                        </div>
                        <div class="p-2">
                                        <th class="ra">${nombre.substr(0,valor)}</th>
                                        ${nombre.substr(valor)}

                                        <th>${apt.substr(0,valor)}</th>
                                        ${apt.substr(valor)}

                                        <th>${apm.substr(0,valor)}</th>
                                        ${apm.substr(valor)}

                                        <strong>${nomt.substr(0,valor)}</strong>
                                        ${nomt.substr(valor)}

                                        <th>${tfecha.substr(0,valor)}</th>
                                        ${tfecha.substr(valor)}

                        </div>
                        </li>
                        </li>
                        </li>
                        `;       
                        }
                }
        }


// }