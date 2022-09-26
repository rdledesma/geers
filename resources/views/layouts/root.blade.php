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
</head>
<body>
    <div id="app" class="container">


        <nav class="m-5 border">
            <div class="row">
                <div class="col-lg-4 col-sm-12 ">

                <a href="/"><img src="images/geers.png"  alt="logogeers" width="150"  class="img-fluid m-2" ></a>

                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col d-flex justify-content-between">
                            <a href="/">INICIO</a>
                            <a href="{{route('integrantes.index')}}">INTEGRANTES</a>
                            <a href="{{route('proyectos.index')}}">PROYECTOS</a>
                            <a href="{{route('recursos.index')}}">RECURSOS</a>
                        </div>
                    </div>
                    <div class="row"  >
                        <div class="col d-flex justify-content-between">
                            <a href="{{route('articulos.index')}}">ARTICULOS</a>
                            <a href="">REVISTAS</a>
                            <a href="/contacto">CONTACTO</a>
                            <a href="">SERVICIOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>


        <footer class="bg-secondary">

            <img  width="150"  class="img-fluid m-2" src="images/logoinenco.png" alt="logoinenco">

            <p class="text-center text-light">Rubén D. Ledesma</p>
            <p class="text-center text-light "><small>rdledesma1995@gmail.com</small></p>
            <p class="text-center text-light "><small>Todos los derechos reservados</small></p>
        </footer>

    </div>



</body>
</html>
