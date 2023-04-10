@extends('layouts.root')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

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
                    <p class="text-center" >{{"cambio de cv"}}</p>
                </div>
            </div>

            @endforeach

        </div>


    </div>



</div>
@endsection
