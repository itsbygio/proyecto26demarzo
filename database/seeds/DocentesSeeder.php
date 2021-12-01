<?php

use Illuminate\Database\Seeder;

class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'id' =>'1',
            'nombre'=>'Julio',
            'apellidos'=>'Diaz',
            'email'=>'diaz@example.com',
            'contacto' =>'12323223',
            'tipo_doc'=>'CC',
            'num_id'=>'2121212123',
            'estado' =>'activo',
            'direccion'=>'CALLE 60-45',
             'escalafon'=>'14',
             'sede'=>'A',
             'tp' =>'Maestria en educacion',
             'ac' =>'Matematicas',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'2',
            'nombre'=>'Alba Ignacia',
            'apellidos'=>'Marquez Tuiran',
            'email'=>'alba0049@gmail.com',
            'contacto' =>'3162789706',
            'tipo_doc'=>'CC',
            'num_id'=>'37922317',
            'estado' =>'activo',
            'direccion'=>'CALLE 77A 22-15',
             'escalafon'=>'14',
             'sede'=>'D',
             'tp' =>'Especialista en Computación para la Docencia',
             'ac' =>'Primaria',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'3',
            'nombre'=>'Arleth',
            'apellidos'=>'Mancera lascarro',
            'email'=>'Mancera03@example.com',
            'contacto' =>'3163032211',
            'tipo_doc'=>'CC',
            'num_id'=>'37935545',
            'estado' =>'activo',
            'direccion'=>'AVENIDA 52 35A98',
             'escalafon'=>'14',
             'sede'=>'A',
             'tp' =>'Especialista en educacion',
             'ac' =>'Matematicas',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'4',
            'nombre'=>'Aurora',
            'apellidos'=>'Delgado Dias',
            'email'=>'Delgado05@gmail.com',
            'contacto' =>'3176992211',
            'tipo_doc'=>'CC',
            'num_id'=>'63283223',
            'estado' =>'activo',
            'direccion'=>'CALLE 60-45',
             'escalafon'=>'12',
             'sede'=>'A',
             'tp' =>'Especialista en Gerencia Informatica',
             'ac' =>'Informática',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'5',
            'nombre'=>'Carlos Alberto',
            'apellidos'=>'Sanabria Barrios',
            'email'=>'eulindarisherbar@hotmail.com',
            'contacto' =>'3205016251',
            'tipo_doc'=>'CC',
            'num_id'=>'91448228',
            'estado' =>'activo',
            'direccion'=>'CALLE 74A 35-10 2o.PISO',
             'escalafon'=>'14',
             'sede'=>'A',
             'tp' =>'Ingeniero electronico con enfasis en sistemas',
             'ac' =>'Tecnologia',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'6',
            'nombre'=>'Carmen Pilar',
            'apellidos'=>'Alape Giraldo',
            'email'=>'pilar.alape16@hotmail.com',
            'contacto' =>'3106282292',
            'tipo_doc'=>'CC',
            'num_id'=>'1096222135',
            'estado' =>'activo',
            'direccion'=>'PEATONAL 7  No. 36E21',
             'escalafon'=>'2A',
             'sede'=>'D',
             'tp' =>'Licentiatura En Educación básica con enfasis, matematicas
             humanidades y lengua castellana',
             'ac' =>'Primaria',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'7',
            'nombre'=>'Damaris',
            'apellidos'=>'Rodriguez Duarte',
            'email'=>'lago-224@hotmail.com',
            'contacto' =>'3144440098',
            'tipo_doc'=>'CC',
            'num_id'=>'63467627',
            'estado' =>'activo',
            'direccion'=>'CARRERA 17 52-66',
             'escalafon'=>'2A',
             'sede'=>'B',
             'tp' =>' Licenciatura En Educación infantil',
             'ac' =>'Primaria',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'8',
            'nombre'=>'Eder David',
            'apellidos'=>'Hernandez Ramos',
            'email'=>'eder_hernz@gmail.com',
            'contacto' =>'3155234133',
            'tipo_doc'=>'CC',
            'num_id'=>'78707176',
            'estado' =>'activo',
            'direccion'=>'CARRERA 36B 60-13',
             'escalafon'=>'14',
             'sede'=>'A',
             'tp' =>'Especialista en metodologia de la enseñanza del español y la literatura
                     Especialista en pedagogia de la recreación ecologica',
             'ac' =>'Lengua castellana',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'9',
            'nombre'=>'Farides Norelvis',
            'apellidos'=>'Galvan Sanchez',
            'email'=>'diaz@example.com',
            'contacto' =>'3147803475',
            'tipo_doc'=>'CC',
            'num_id'=>'63464647',
            'estado' =>'activo',
            'direccion'=>'CALLE35D 48-15',
             'escalafon'=>'2A',
             'sede'=>'B',
             'tp' =>'Licenciatura En Educación Básica con enfasis en Ciencias Sociales',
             'ac' =>'Primaria',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);
          DB::table('docentes')->insert([
            'id' =>'10',
            'nombre'=>'Luz Amparo',
            'apellidos'=>'Gil Estevez',
            'email'=>'lage_g3@hotmail.com',
            'contacto' =>'3177877578',
            'tipo_doc'=>'CC',
            'num_id'=>'37721325',
            'estado' =>'activo',
            'direccion'=>'CALLE 57 #35 63',
             'escalafon'=>'14',
             'sede'=>'A',
             'tp' =>'Especialista en Gerencia Informatica',
             'ac' =>'Biologia',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),
             

          ]);

    }
}
