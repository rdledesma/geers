@extends('layouts.root')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <p class="text-justify">
                En el <strong>Grupo de Estudio y Evaluación del Recurso Solar </strong> trabajamos para lograr un conocimiento
                detallado del recurso solar con el que cuenta el Noroeste Argentino. Este conocimiento permite
                dimensionar las posibilidades aprovechables que pueden surgir del uso de una fuente de energia
                alternativa como lo es el sol.

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore blanditiis libero corporis dicta nam modi numquam ipsum voluptas perferendis nisi voluptatem ratione cum, ea natus. Labore dolor modi eligendi cum.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa fugit et commodi vero expedita rem, tenetur recusandae ratione, voluptatem aspernatur necessitatibus? Laudantium officia perspiciatis atque facere illo non consectetur natus.


                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur velit cum reprehenderit adipisci maiores libero, sunt provident exercitationem modi commodi praesentium veritatis qui quia fugiat dolorum, voluptatibus asperiores, nam quidem!

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum hic quo id qui debitis rem sit cumque architecto sapiente blanditiis soluta impedit provident porro, expedita perspiciatis, delectus ad itaque repellendus?

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum provident veritatis odio repellendus odit voluptatibus dicta modi ratione nulla doloremque inventore deleniti commodi sit repudiandae maxime, architecto impedit est. Quia!


            </p>

            <p>
                GEERS es un grupo de investigación con sede en el <a href="http://inenco.unsa.edu.ar/">INENCO</a>
            </p>


            <!--<div class="embed-responsive embed-responsive-4by3">
                <iframe title="Map" class="map__embed" id="mapRadResult"  src="https://api.solcast.com.au/LocationRadDemoV2?latitude=-24.7&amp;longitude=-65.4" data-lf-yt-playback-inspected-yegkb8lqr3v7ep3z="true"></iframe>

            </div>-->

        </div>

       <!-- <div class="col-md-4">
            <div class="embed-responsive embed-responsive-1by1">
                <video width="440px" loop="true" autoplay="autoplay" muted>
                    <source src="https://media.solcast.com/goss10min/2022-07-25/1280x1644.mp4" type="video/mp4" />
                  </video>
              </div>

        </div>-->

        <div class="col-md-5" style="background-color: #bbbbbb">
            <div class="container">
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe scrolling="no" title="Map" class="map__embed responsive-iframe" id="mapRadResult"  src="https://api.solcast.com.au/LocationRadDemoV2?latitude=-24.7&amp;longitude=-65.4" data-lf-yt-playback-inspected-yegkb8lqr3v7ep3z="true" style="width:100%; height: 100%;" ></iframe>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn.hobbyconsolas.com%2Fsites%2Fnavi.axelspringer.es%2Fpublic%2Fmedia%2Fimage%2F2021%2F08%2Fnaruto-naruto-uzumaki-2425679.jpg%3Ftf%3D3840x&tbnid=9ckcPi3Bn5BapM&vet=12ahUKEwjl5tDywo7_AhUBA9QKHcagB88QMygCegUIARDkAQ..i&imgrefurl=https%3A%2F%2Fwww.hobbyconsolas.com%2Fnoticias%2Fnaruto-anime-popular-mundo-nuevo-estudio-908637&docid=0JG09jScyw6a9M&w=3840&h=2160&q=naruto&ved=2ahUKEwjl5tDywo7_AhUBA9QKHcagB88QMygCegUIARDkAQ" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>           
        </div>





    </div>
</div>
@endsection
