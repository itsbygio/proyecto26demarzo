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
            'email'=>'ramirezhernandez@gmail.com',
            'contacto' =>'902129121',
            'tipo_doc'=>'Tarjeta de identidad',
            'num_id'=>'3021923232',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
            'email'=>'ricardortega@gmail.com',
            'contacto' =>'320923292',
            'tipo_doc'=>'Tarjeta de identidad',
            'num_id'=>'1012102121',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
            'email'=>'andressuarez@gmail.com',
            'contacto' =>'312123221',
            'tipo_doc'=>'Tarjeta de identidad',
            'num_id'=>'192392312',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
            'email'=>'juanmendez@example.com',
            'contacto' =>'3029120921',
            'tipo_doc'=>'Tarjeta de identidad',
            'num_id'=>'1092812355',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
            'email'=>'carloshernandez@gmail.com',
            'contacto' =>'31726328123',
            'tipo_doc'=>'Tarjeta de identidad',
            'num_id'=>'9921821234',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
            'email'=>'juliansanchez@gmail.com',
            'contacto' =>'3182712123',
            'tipo_doc'=>'Tarjeta de identidad',
            'num_id'=>'9821912345',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
            'email'=>'andresodriguez@example.com',
            'contacto' =>'3172192123',
            'tipo_doc'=>'Tarjeta de identidad',
            'num_id'=>'9901929123',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
    /*
        DB::table('estudiantes')->insert([
            'id' =>'8',
            'nombre'=>'Cielo Gissell',
            'apellidos'=>'Aguirre Rodriguez ',
            'email'=>'rodriguezaguirre@gmail.com',
            'contacto' =>'3172812343',
            'tipo_doc'=>'TI',
            'num_id'=>'1092176120',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
            'email'=>'carlosalberto@gmail.com',
            'contacto' =>'3188123451',
            'tipo_doc'=>'TI',
            'num_id'=>'992819123',
            'estado' =>'activo',
            'sede' =>'A',
            'nivel' =>'Media',
            'jornada' =>'Tarde',
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
        */
    }   
}
