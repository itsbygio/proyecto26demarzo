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
            'nombre' =>'administrador',
            'rol'=>'administrador',
            'email' =>'administrador@inst26demarzo.com',
            'password' => Hash::make('administrador12345'),  
        ]);
        DB::table('users')->insert([
            'nombre' =>'coordinador',
            'rol'=>'coordinador',
            'email' =>'coordinador@inst26demarzo.com',
            'password' => Hash::make('coordinador12345'),  
        ]);
        DB::table('users')->insert([
            'nombre' =>'secretaria',
            'rol'=>'secretaria',
            'email' =>'secretaria@inst26demarzo.com',
            'password' => Hash::make('secretaria12345'),  
        ]);
        DB::table('users')->insert([
            'nombre' =>'archivo',
            'rol'=>'archivo',
            'email' =>'archivo@inst26demarzo.com',
            'password' => Hash::make('archivo12345'),  
        ]);
    }
}
