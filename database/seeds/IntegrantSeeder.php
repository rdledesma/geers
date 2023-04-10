<?php

use Illuminate\Database\Seeder;

class IntegrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('integrants')->insert([
            'name' => 'Germán Ariel Salazar',
            'email'=> 'germansalazar.ar@gmail.com',
            'title' => 'Dr.',
            'charge' => 'Investigador Adjunto CIC- Instituto de Investigaciones en Energia No Convencional (INENCO) - CONICET',
            'cv' => 'cv-german.pdf',
            'photo' => 'images/german.jpg',
            'description' => 'Modificar datos de aqui'
        ]);

        DB::table('integrants')->insert([
            'name' => 'Hugo Pablo Saldaño ',
            'email'=> 'hpablohugo@gmail.com',
            'title' => 'Dr.',
            'charge' => 'Investigador .... - Instituto de Investigaciones en Energia No Convencional (INENCO) - CONICET',
            'cv' => 'cv-hugo.pdf',
            'photo' => 'https://media-exp1.licdn.com/dms/image/C5603AQEt_7oKGaL7Lg/profile-displayphoto-shrink_800_800/0/1517482228639?e=1664409600&v=beta&t=fRRaMsgzOwTmopYf-p8tJqSm2lb6BaNXw0y0budnA34',
            'description' => 'eget duis at tellus at urna condimentum mattis pellentesque id nibh tortor id aliquet lectus proin nibh nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet'
        ]);

        DB::table('integrants')->insert([
            'name' => 'Marta Roxana Laspiur',
            'email'=> 'roxslaspiur@gmail.com',
            'title' => 'Lic.',
            'charge' => 'Becaria - Instituto de Investigaciones en Energia No Convencional (INENCO) - AAAAAAA',
            'cv' => 'cv-roxana.pdf',
            'photo' => 'https://lh3.googleusercontent.com/a-/AFdZucqJMaYSAwIs_CurtntOx269iajNn_wUkAPIY_34=s272-p-k-rw-no',
            'description' => 'eget duis at tellus at urna condimentum mattis pellentesque id nibh tortor id aliquet lectus proin nibh nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet'
        ]);

        DB::table('integrants')->insert([
            'name' => 'Rubén Dario Ledesma',
            'email'=> 'rdledesma1995@gmail.com',
            'title' => 'Lic.',
            'charge' => 'Becario - Instituto de Investigaciones en Energia No Convencional (INENCO) - CONICET',
            'cv' => 'cv-dario.pdf',
            'photo' => 'https://lh3.googleusercontent.com/a-/AFdZucqKoYU1tZ7hYxdMH0TMS__R2A_tQrbCuK5Qk77Q4g=s288-p-rw-no',
            'description' => 'eget duis at tellus at urna condimentum mattis pellentesque id nibh tortor id aliquet lectus proin nibh nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet'
        ]);

    }
}
