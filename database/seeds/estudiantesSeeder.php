<?php

use Illuminate\Database\Seeder;

class estudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiantes')->insert([
            'id' =>'1',
            'nombre'=>'Ramirez',
            'apellidos'=>'Hernandez',
            'email'=>'ramirez@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        DB::table('cur_est')->insert([
            'id' =>'1',
            'id_cur'=> '1',
            'id_est'=>'1',
        ]);
        
        DB::table('estudiantes')->insert([
            'id' =>'2',
            'nombre'=>'Ricardo',
            'apellidos'=>'ortega',
            'email'=>'ortega1@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        DB::table('cur_est')->insert([
            'id' =>'2',
            'id_cur'=> '1',
            'id_est'=>'2',
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'3',
            'nombre'=>'Andres',
            'apellidos'=>'Suarez',
            'email'=>'andres@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        DB::table('cur_est')->insert([
            'id' =>'3',
            'id_cur'=> '1',
            'id_est'=>'3',
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'4',
            'nombre'=>'Juan',
            'apellidos'=>'Mendez',
            'email'=>'juan@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        DB::table('cur_est')->insert([
            'id' =>'4',
            'id_cur'=> '1',
            'id_est'=>'4',
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'5',
            'nombre'=>'Carlos',
            'apellidos'=> 'hernandez',
            'email'=>'carlos@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        DB::table('cur_est')->insert([
            'id' =>'5',
            'id_cur'=> '1',
            'id_est'=>'5',
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'6',
            'nombre'=>'Julian',
            'apellidos'=>'Sanchez',
            'email'=>'julian@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        DB::table('cur_est')->insert([
            'id' =>'6',
            'id_cur'=> '1',
            'id_est'=>'6',
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'7',
            'nombre'=>'Andres ',
            'apellidos'=>'Rodriguez',
            'email'=>'Rodriguez@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        DB::table('cur_est')->insert([
            'id' =>'7',
            'id_cur'=> '1',
            'id_est'=>'7',
        ]);
    }   
}
