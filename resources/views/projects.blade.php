@extends('layouts.root')

@section('content')
<div class="container">



    <div class="row justify-content-center mt-5">
        <div class="col">
            @foreach ($projects as $project)
                <div class="row border boder-secondary m-2">
                    <div class="col">
                        <p class="text-center h3">{{$project->title}}</p>
                    </div>
                    <div class="col-8">

                        <p class="text-justify font-italic">{{$project->description}}</p>

                        <p class="text-center" >  <a  href="{{$project->link}}">Ir al proyecto</a> </p>
                    </div>
                </div>


            @endforeach

        </div>


    </div>



</div>
@endsection
