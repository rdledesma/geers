@extends('layouts.root')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="text-justify">
                GEERS es un grupo de investigación con sede en el <a href="http://inenco.unsa.edu.ar/">INENCO</a>
            </p>

            <p class="text-justify">
                <strong>Universidad Nacional de Salta -
                    Fac. de Ciencias Exactas -
                    Dpto. de Física. -
                    Box 110</strong>
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3047.3717249276224!2d-65.4111770272353!3d-24.72838608339536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d-24.7286599!2d-65.409779!4m5!1s0x941bc1cf08a9e091%3A0x8ad0d32ec99e1b78!2sINENCO%2C%20Salta!3m2!1d-24.7288166!2d-65.4093898!5e0!3m2!1ses-419!2sar!4v1659533361368!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
