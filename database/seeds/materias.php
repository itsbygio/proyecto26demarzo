<?php

use Illuminate\Database\Seeder;

class materias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'id' =>'1',
            'titulo'=>'Quimica',
        ]);
        DB::table('users')->insert([
            'id' =>'2',
            'titulo'=>'Matematicas',
        ]);
        DB::table('users')->insert([
            'id' =>'3',
            'titulo'=>'Ingles',
        ]);
        DB::table('users')->insert([
            'id' =>'4',
            'titulo'=>'Fisica',
        ]);
        
    }
}
