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
            'nombre'=>'Ricardo',
            'apellidos'=>'ortega',
            'email'=>'ortega@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'cedula',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'1',
        ]);
        
        DB::table('estudiantes')->insert([
            'id' =>'2',
            'nombre'=>'Ricardo',
            'apellidos'=>'ortega',
            'email'=>'ortega1@example.com',
            'contacto' =>'123456789',
            'tipo_doc'=>'cedula',
            'num_id'=>'123456780',
            'estado' =>'activo',
            'id_curso'=>'2',
        ]);
        
    }
}
