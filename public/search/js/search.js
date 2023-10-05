import {search} from './export_search.js';
const mysearchp = document.querySelector("#mysearch");
const ul_add_lip = document.querySelector("#showlist");
const myurlp = "/myurl";
const searchusuariotitulado = new search(myurlp,mysearchp,ul_add_lip);
searchusuariotitulado.InputSearch();
// console.log(searchusuariotitulado.example());