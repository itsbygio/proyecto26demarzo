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
        DB::table('users')->insert([
            'nombre' =>'Administrador',
            'rol'=>'ad',
            'nrol'=>'Administrador',
            'email' =>'administrador@inst26demarzo.com',
            'password' => Hash::make('administrador12345'),  
        ]);
        DB::table('users')->insert([
            'nombre' =>'Coordinador',
            'rol'=>'co',
            'nrol'=>'coordinador',
            'email' =>'coordinador@inst26demarzo.com',
            'password' => Hash::make('coordinador12345'),  
        ]);
        DB::table('users')->insert([
            'nombre' =>'Secretaria de rectoria',
            'rol'=>'sr',
            'nrol'=>'secretaria de rectoria',
            'email' =>'secretaria@inst26demarzo.com',
            'password' => Hash::make('secretaria12345'),  
        ]);
        DB::table('users')->insert([
            'nombre' =>'Archivo',
            'nrol'=>'archivo',
            'rol'=>'ar',
            'email' =>'archivo@inst26demarzo.com',
            'password' => Hash::make('archivo12345'),  
        ]);
    }
}
