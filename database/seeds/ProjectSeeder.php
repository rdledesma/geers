<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'title' => 'Ejemplo_1',
            'description'=> 'CALCUSOL, una aplicación android realizada con el propósito de facilitar cálculos asociados a la geometría solar. El objetivo de éste trabajo fue analizar, desarrollar y desplegar una aplicación práctica que permitera a usuarios destinatarios realizar de manera eficiente, a través de un dispositivo móvil, el cálculo de métodos matemáticos utilizados en la labor de la radiación solar. Se detallan los requerimientos de instalación y se especifican los modelos matemáticos utilizados',
            'link' => 'projects/ASADES-EjemploArticulo-1.docx',
        ]);
        DB::table('projects')->insert([
            'title' => 'Ejemplo_2',
            'description'=> 'CALCUSOL, una aplicación android realizada con el propósito de facilitar cálculos asociados a la geometría solar. El objetivo de éste trabajo fue analizar, desarrollar y desplegar una aplicación práctica que permitera a usuarios destinatarios realizar de manera eficiente, a través de un dispositivo móvil, el cálculo de métodos matemáticos utilizados en la labor de la radiación solar. Se detallan los requerimientos de instalación y se especifican los modelos matemáticos utilizados',
            'link' => 'projects/ASADES-EjemploArticulo-1.docx',
        ]);
        DB::table('projects')->insert([
            'title' => 'Ejemplo_3',
            'description'=> 'CALCUSOL, una aplicación android realizada con el propósito de facilitar cálculos asociados a la geometría solar. El objetivo de éste trabajo fue analizar, desarrollar y desplegar una aplicación práctica que permitera a usuarios destinatarios realizar de manera eficiente, a través de un dispositivo móvil, el cálculo de métodos matemáticos utilizados en la labor de la radiación solar. Se detallan los requerimientos de instalación y se especifican los modelos matemáticos utilizados',
            'link' => 'projects/ASADES-EjemploArticulo-1.docx',
            
        ]);
    }
}
