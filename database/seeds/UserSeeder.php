<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('users')->insert([
            'nombre' =>'Miguel Angel',
            'apellidos' =>'Ocampo Chavarro',
            'rol'=>'Administrador',
            'nrol'=>'1',
            'estado'=>'activo',
            'email' =>'miguelocampoc@inst26demarzo.com',
            'password' => Hash::make('administrador12345'),
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),  
        ]);
        DB::table('users')->insert([
            'nombre' =>'Coordinador',
            'rol'=>'Coordinador',
            'nrol'=>'2',
            'email' =>'coordinador@inst26demarzo.com',
            'password' => Hash::make('coordinador12345'),  
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'nombre' =>'Secretaria de rectoria',
            'rol'=>'Secretaria de rectoria',
            'nrol'=>'3',
            'email' =>'secretaria@inst26demarzo.com',
            'password' => Hash::make('secretaria12345'),  
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'nombre' =>'Archivo',
            'nrol'=>'4',
            'rol'=>'Archivo',
            'email' =>'archivo@inst26demarzo.com',
            'password' => Hash::make('archivo12345'),
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'), 
        ]);
        */
    }
}
