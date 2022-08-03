@extends('layouts.root')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="text-justify">
                En el <strong>Grupo de Estudio y Evaluación del Recurso Solar </strong> trabajamos para lograr un conocimiento
                detallado del recurso solar con el que cuenta el Noroeste Argentino. Este conocimiento permite
                dimensionar las posibilidades aprovechables que pueden surgir del uso de una fuente de energia
                alternativa como lo es el sol.
            </p>

            <p>
                GEERS es un grupo de investigación con sede en el <a href="http://inenco.unsa.edu.ar/">INENCO</a>
            </p>


            <div class="embed-responsive embed-responsive-4by3">
                <iframe title="Map" class="map__embed" id="mapRadResult"  src="https://api.solcast.com.au/LocationRadDemoV2?latitude=-24.7&amp;longitude=-65.4" data-lf-yt-playback-inspected-yegkb8lqr3v7ep3z="true"></iframe>

              </div>

        </div>

        <div class="col-md-4">
            <div class="embed-responsive embed-responsive-1by1">
                <video width="440px" loop="true" autoplay="autoplay" muted>
                    <source src="https://media.solcast.com/goss10min/2022-07-25/1280x1644.mp4" type="video/mp4" />
                  </video>
              </div>

        </div>




    </div>
</div>
@endsection
