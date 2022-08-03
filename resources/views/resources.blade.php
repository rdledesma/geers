@extends('layouts.root')

@section('content')
<div class="container">



    <div class="row justify-content-center mt-5">
        <div class="col">
            @foreach ($resources as $resource)
                <div class="row border boder-secondary m-2">
                    <div class="col">
                        <img  width="150"  class="img-fluid m-2"  src="{{$resource->icon}}" alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-center h3">{{$resource->title}}</p>
                        <p class="text-justify font-italic">{{$resource->description}}</p>

                        <p class="text-center" >  <a  href="{{$resource->link}}">Ir al recurso</a> </p>
                    </div>
                </div>


            @endforeach

        </div>


    </div>



</div>
@endsection
