@extends('layouts.root')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="text-justify">
                En Grupo de Evaluación y Estudio del Recurso Solar trabajamos para lograr un conocimiento
                detallado del recurso solar con el que cuenta el Noroeste Argentino. Este conocimiento permite
                dimensionar las posibilidades aprovechables que pueden surgir del uso de una fuente de energia
                alternativa como lo es el sol.
            </p>

            <p>
                GEERS es un grupo de investigación con sede en el <a href="http://inenco.unsa.edu.ar/">INENCO</a>
            </p>

            @foreach ($integrants as $integrant)



            <div class="row m-2 " >
                <div class="col">
                    <img  width="380"  class="img-fluid m-2"  src="{{$integrant->photo}}" alt="">
                </div>
                <div class="col">
                    <p class="text-center h3">{{$integrant->title}} {{$integrant->name}}</p>
                    <p>{{$integrant->charge}}</p>
                    <p class="text-justify font-italic">{{$integrant->description}}</p>
                    <p class="text-center">{{$integrant->email}}</p>
                    <p class="text-center" >{{"CV"}}</p>
                </div>
            </div>

            @endforeach

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
