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
            'photo' => 'images/GermanSalazar2.jpg',
            'description' => 'Licenciado en Física (1999), Especialista en Energías Renovables (2007), Doctor en Ciencias Área Energías Renovables (2009), posgrado en Energías Renovables (2016). Es investigador Adjunto de CONICET y docente regular de la Universidad Nacional de Salta. Es investigador senior en análisis de valores de radiación solar, con foco en sitios de altitud. Ha publicado 14 artículos internacionales (en revistas de alto impacto) sobre esta temática y más de 35 artículos en congresos nacionales y regionales. Posee experiencia y conocimientos sólidos en lo que a implementación de dispositivos de medición electrónicos/automáticos se refiere, habiendo instalado 5 estaciones radiométricas en la región de Salta-Jujuy. Es responsable por CONICET del Convenio entre INTA y CONICET para el mantenimiento de las estaciones radiométricas de la red ENARSOL.
            '
        ]);

        DB::table('integrants')->insert([
            'name' => 'Hugo Pablo Saldaño ',
            'email'=> 'hpablohugo@gmail.com',
            'title' => 'Dr.',
            'charge' => 'Investigador Asistente de CONICET - Instituto de Investigaciones en Energia No Convencional (INENCO) - CONICET',
            'cv' => 'cv-hugo.pdf',
            'photo' => 'images/Hugo-Saldano2.jpg',
            'description' => 'Doctor en Astronomía. Licenciado y doctorado en la Facultad de Matemática, Astronomía y Física (FaMAF) de la Universidad Nacional de Córdoba (UNC). Área de Investigación: Formación Estelar en la Vía Láctea y en galaxias irregulares de baja metalicidad. Experiencia en la reducción y análisis de imágenes astronómicas en el infrarrojo y radio de los telescopios Herschel, APEX y ALMA. Miembro del grupo científico para el telescopio LLAMA.'
        ]);

        DB::table('integrants')->insert([
            'name' => 'Marta Roxana Laspiur',
            'email'=> 'roxslaspiur@gmail.com',
            'title' => 'Lic.',
            'charge' => 'Becaria - Instituto de Investigaciones en Energia No Convencional (INENCO) - AGENCIA',
            'cv' => 'cv-roxana.pdf',
            'photo' => 'images/ROXANA-LASPIUR2.jpg',
            'description' => ' Licenciada en Física, egresada de la Universidad Nacional de Salta. JTP de la cátedra Física II ( Sede Regional Metán-Rosario de la Frontera. UNSa). Actualmente doctorando en Ciencias (Área de Energías Renovables).
            Sólida formación en análisis de bases de datos meteorológicos y de radiación solar, conocimientos en modelos de radiación solar de día claro y transferencia de calor. Manejo del lenguaje Python  y de software de CFD (Computational Fluid Dynamics). '
        ]);

        DB::table('integrants')->insert([
            'name' => 'Rubén Dario Ledesma',
            'email'=> 'rdledesma1995@gmail.com',
            'title' => 'Lic.',
            'charge' => 'Becario - Instituto de Investigaciones en Energia No Convencional (INENCO) - CONICET',
            'cv' => 'cv-dario.pdf',
            'photo' => 'images/RubenLedesma2.jpg',
            'description' => 'Licenciado en Análisis de Sistemas (2019) por la Universidad Nacional de Salta. Es becario doctoral Temas Estratégicos de CONICET (2020). Su director es el Dr. Germán Salazar y su Codirectora es la Dra. Olga de Castro Vilela, ambos participantes de este proyecto. Ha desarrollado una app para celular con los cálculos de Geometría Solar (Calcusol). Su tema de Tesis está directamente relacionado con el tema de este proyecto. 
            '
        ]);

        DB::table('integrants')->insert([
            'name' => 'Diego Antonio Salve',
            'email'=> 'salve.diego@inta.gob.ar',
            'title' => 'Ing.',
            'charge' => 'Becario - INTA IPAF - INTA',
            'cv' => 'cv-dario.pdf',
            'photo' => 'images/DiegoSalve.jpg',
            'description' => 'Ingeniero en Recursos Naturales y Medio Ambiente (2017). Becario Doctoral Temas Estratégicos del INENCO (2018) con lugar de trabajo en el Instituto de Investigación y Desarrollo Tecnológico para la Agricultura Familiar Región NOA (INTA IPAF NOA). Evalúa la eficiencia en el uso de la radiación solar del cultivo de maíz andino en sitios de altura, en un gradiente altitudinal comprendido entre los 1000 y los 3500 metros sobre el nivel del mar, contrastando densidades de siembra y genotipos empleados en la región.'
        ]);

        DB::table('integrants')->insert([
            'name' => 'Constanza Belén Lopez Ruiz',
            'email'=> 'conyblopezruiz@gmail.com',
            'title' => 'Lic.',
            'charge' => 'CPA - Instituto de Investigaciones en Energia No Convencional (INENCO) - CONICET',
            'cv' => 'cv-cony.pdf',
            'photo' => 'images\Cony2.jpg',
            'description' => ' Licenciada en Energías Renovables por la Universidad Nacional de Salta (2020). Profesional Asistente en la carrera CPA de CONICET con lugar de trabajo en el INENCO (2022). Su trabajo es el mantenimiento de las estaciones meteorológicas del INENCO y de aquellas que por convenios son de interés del INENCO. Tiene publicaciones en actas de Congreso.
            '
        ]);

    }
}
