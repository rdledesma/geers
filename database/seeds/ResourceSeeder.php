<?php

use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert([
            'title' => 'CALCUSOL',
            'icon' => 'https://play-lh.googleusercontent.com/sRUJYJwnrmGUXmojyHiPiPYV5yedNdn_ojKaieALIoiRjZlh2mX_dwdyvWr2rdaqR8A=w240-h480-rw',
            'description'=> 'CALCUSOL, una aplicación android realizada con el propósito de facilitar cálculos asociados a la geometría solar. El objetivo de éste trabajo fue analizar, desarrollar y desplegar una aplicación práctica que permitera a usuarios destinatarios realizar de manera eficiente, a través de un dispositivo móvil, el cálculo de métodos matemáticos utilizados en la labor de la radiación solar. Se detallan los requerimientos de instalación y se especifican los modelos matemáticos utilizados',
            'link' => 'https://play.google.com/store/apps/details?id=com.tallytest.tablayout',
        ]);

        DB::table('resources')->insert([
            'title' => 'ARG-P',
            'icon' => 'images/ARG-P-version1_1.ico',
            'description'=> 'CALCUSOL, una aplicación android realizada con el propósito de facilitar cálculos asociados a la geometría solar. El objetivo de éste trabajo fue analizar, desarrollar y desplegar una aplicación práctica que permitera a usuarios destinatarios realizar de manera eficiente, a través de un dispositivo móvil, el cálculo de métodos matemáticos utilizados en la labor de la radiación solar. Se detallan los requerimientos de instalación y se especifican los modelos matemáticos utilizados',
            'link' => 'downlable/argp.exe',
        ]);


    }
}
