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
    }
}
