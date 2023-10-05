<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- JavaScript -->
        <!-- <script src="{{asset('js/main.js')}}"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

        <!-- <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> -->
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 bg-gray-50 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        @if (Route::has('register'))
                        @endif
                    @endauth
                </div>
            @endif

        <nav>
        <div class="nav__content">
            <!-- <div class="logo"><a href="#">Mitchell</a></div> -->
            <img src="{{ asset('img/logoDREPPUNOwelcome.png') }}" alt="logo" width="150" height="70">
            <label for="check" class="checkbox">
            <i class="ri-menu-line"></i>
            </label>
            <input type="checkbox" name="check" id="check" />
            <ul>
            <li><a href="#"><img src="{{ asset('img/logoDREPPUNOwelcome.png') }}" width="20" height="12"> Página oficial</a></li>
            <li><a href="#"><img src="{{ asset('img/facebook.png') }}" width="20" height="12"> Facebook</a></li>
            <li><a href="#"><img src="{{ asset('img/youtube.png') }}" width="20" height="12"> YuoTube</a></li>
            <li><a href="#"><img src="{{ asset('img/contacto.png') }}" width="20" height="12"> Contacto</a></li>
        </ul>
      </div>
    </nav>
    <section class="section">
      <div class="section__container">
        <div class="content">
          <p class="subtitle">Plataforma</p>
          <h1 class="title">
            <span>Consulta de títulos<br /></span>
          </h1>
          <p class="description">
          Mediante esta plataforma podrás verificar la información de tu título que hayas obtenido,
          la institución educativa que los expidió y su fecha de emisión.
          </p>

          <!-- <div class="action__btns">
            <button class="btnverificarT">Verifica tu Título</button>
          </div> -->

          <!--Boton-->
          <div class="boton-modal">
                  <label for="btn-modal">Verifica tu Título</label>
              </div>
          <!--Fin de Boton-->

          <!-- data-toggle="modal" data-target="#staticBackdrop" -->

        </div>
        <div class="image">
          <img src="{{ asset('img/logoDREPPUNOwelcome2.jpeg') }}" alt="profile">
        </div>
      </div>
    </section>
        </div>

<!--Ventana Modal-->
<input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
            <h2>TÍTULOS PROFESIONALES</h2>
            <div class="row">
                            
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="entryarea col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" id="mysearch" name="busqueda" ><!--placeholder="Buscar"-->
                                    <br>
                                    <ul id="showlist" tabindex="1" class="list-group"></ul>
                            </div>

            
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nostrum!</p> -->
            <div class="btn-cerrar">
                <label for="btn-modal">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>
<!--Fin de Ventana Modal-->
            <script src="{{asset('search/js/search.js') }}" type="module"></script>
    </body>
</html>
