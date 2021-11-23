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
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('materias')->insert([
            'id' =>'2',
            'titulo'=>'Matematicas',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('materias')->insert([
            'id' =>'3',
            'titulo'=>'Ingles',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('materias')->insert([
            'id' =>'4',
            'titulo'=>'Fisica',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        
    }
}
