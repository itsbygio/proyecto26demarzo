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
            'contacto' =>'1234567891',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'1',
            'id_cur'=> '1',
            'id_est'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        
        DB::table('estudiantes')->insert([
            'id' =>'2',
            'nombre'=>'Ricardo',
            'apellidos'=>'ortega',
            'email'=>'ortega1@example.com',
            'contacto' =>'1234567892',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'2',
            'id_cur'=> '1',
            'id_est'=>'2',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'3',
            'nombre'=>'Andres',
            'apellidos'=>'Suarez',
            'email'=>'andres@example.com',
            'contacto' =>'1234567893',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'3',
            'id_cur'=> '1',
            'id_est'=>'3',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'4',
            'nombre'=>'Juan',
            'apellidos'=>'Mendez',
            'email'=>'juan@example.com',
            'contacto' =>'1234567894',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'4',
            'id_cur'=> '1',
            'id_est'=>'4',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'5',
            'nombre'=>'Carlos',
            'apellidos'=> 'hernandez',
            'email'=>'carlos@example.com',
            'contacto' =>'1234567895',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'5',
            'id_cur'=> '1',
            'id_est'=>'5',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'6',
            'nombre'=>'Julian',
            'apellidos'=>'Sanchez',
            'email'=>'julian@example.com',
            'contacto' =>'1234567896',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'6',
            'id_cur'=> '1',
            'id_est'=>'6',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'7',
            'nombre'=>'Andres ',
            'apellidos'=>'Rodriguez',
            'email'=>'Rodriguez@example.com',
            'contacto' =>'1234567897',
            'tipo_doc'=>'TI',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'7',
            'id_cur'=> '1',
            'id_est'=>'7',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'8',
            'nombre'=>'Cielo Gissell',
            'apellidos'=>'Aguirre Rodriguez ',
            'email'=>'Rodriguez@example.com',
            'contacto' =>'1234567897',
            'tipo_doc'=>'TI',
            'num_id'=>'1092176120',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'8',
            'id_cur'=> null,
            'id_est'=>'8',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('estudiantes')->insert([
            'id' =>'9',
            'nombre'=>'Carlos Alberto',
            'apellidos'=>'Guzman Chisica',
            'email'=>'carlos@example.com',
            'contacto' =>'1234567897',
            'tipo_doc'=>'TI',
            'num_id'=>'12121211',
            'estado' =>'activo',
            'id_curso'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cur_est')->insert([
            'id' =>'9',
            'id_cur'=> '16',
            'id_est'=>'9',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
    }   
}
