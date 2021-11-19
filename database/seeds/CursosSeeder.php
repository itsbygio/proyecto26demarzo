<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'id' =>'1',
            'titulo'=>'11-1',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'2',
            'titulo'=>'11-2',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'3',
            'titulo'=>'11-3',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'4',
            'titulo'=>'11-4',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'5',
            'titulo'=>'11-5',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'6',
            'titulo'=>'10-1',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'7',
            'titulo'=>'10-2',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'8',
            'titulo'=>'10-3',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'9',
            'titulo'=>'10-4',
            'año'=>'2021',  
        ]);
        DB::table('cursos')->insert([
            'id' =>'10',
            'titulo'=>'10-5',
            'año'=>'2021',  
        ]);
    }
}
