<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/micss.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">


        <nav class="m-2 border">
            <div class="row">
                <div class="col-lg-4 col-sm-12 ">

                <a href="/"><img src="images/GEERS_1.png"  alt="logogeers" width="150"  class="img-fluid m-2" ></a>

                </div>
                <div class="col-lg-6 col-sm-12 align-items-center" >
                    <div class="row">
                        <div class="col d-flex justify-content-between">
                            <a href="/"><strong>INICIO</strong></a>
                            <a href="{{route('integrantes.index')}}"><strong>INTEGRANTES</strong></a>
                            <a href="{{route('proyectos.index')}}"><strong>PROYECTOS</strong></a>
                            <!--<a href="{{route('recursos.index')}}">RECURSOS</a>-->
                        </div>
                    </div>
                    <div class="row"  >
                        <div class="col d-flex justify-content-between">
                            <a href="{{route('articulos.index')}}"><strong>ARTICULOS</strong></a>
                            <!--<a href="">REVISTAS</a>-->
                            <a href="/contacto"><strong>CONTACTO</strong></a>
                            <a href=""><strong>SERVICIOS</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>


         <!--<div class="bg-secondary">

            <div class="row">
                
                <div class="col ml-auto bg-primary ">
                    <img  src="images/logoinenco.png"  alt="logogeers" width="150"  class="img-fluid m-2">
                </div>
                <div class="col mr-auto">
                    <p class="text-center text-light">Rubén D. Ledesma - Constanza Belén Lopez Ruiz</p>
                    <p class="text-center text-light "><small>rdledesma1995@gmail.com</small></p>
                <p class="text-center text-light "><small>Todos los derechos reservados</small></p>
                </div>
            </div>
           <div class="row">
                    <div class="col">left</div>
                    <div class="col text-right">inline content needs to be right aligned</div>
                </div>
                <div class="row">
                    <div class="col">left</div>
                    <div class="col">
                        <div class="float-left">element needs to be right aligned</div>
                </div>-->
                <footer class="bg-secondary">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="images/logoinenco.png"  alt="logogeers" width="150"  class="img-fluid m-2">
                    </div>
                        <div class="col-9 d-flex justify-content-end">
                        <p class="text-center text-light">Rubén D. Ledesma - Constanza Belén Lopez Ruiz</p>
                        <p class="text-center text-light "><small>rdledesma1995@gmail.com</small></p>
                        <p class="text-center text-light "><small>Todos los derechos reservados</small></p>
                    </div>
                </div>
            </footer>



</div>
</div>

    </div>



</body>
</html>
