<?php

use Illuminate\Database\Seeder;

class cursos extends Seeder
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
            'titulo'=>'11°1',
            'año'=>'2021',
            'titulo_letras'=> 'ONCE UNO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'2',
            'titulo'=>'11°2',
            'año'=>'2021',
            'titulo_letras'=> 'ONCE DOS',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'3',
            'titulo'=>'11°3',
            'año'=>'2021', 
            'titulo_letras'=> 'ONCE TRES',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')  
        ]);
        DB::table('cursos')->insert([
            'id' =>'4',
            'titulo'=>'11°4',
            'año'=>'2021',
            'titulo_letras'=> 'ONCE CUATRO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')   
        ]);
        DB::table('cursos')->insert([
            'id' =>'5',
            'titulo'=>'11°5',
            'año'=>'2021',
            'titulo_letras'=> 'ONCE CINCO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')  
        ]);
        DB::table('cursos')->insert([
            'id' =>'6',
            'titulo'=>'10°1',
            'año'=>'2021',
            'titulo_letras'=> 'DECIMO UNO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'7',
            'titulo'=>'10°2',
            'año'=>'2021',
            'titulo_letras'=> 'DECIMO DOS',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')  
        ]);
        DB::table('cursos')->insert([
            'id' =>'8',
            'titulo'=>'10°3',
            'año'=>'2021',
            'titulo_letras'=> 'DECIMO TRES',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')  
        ]);
        DB::table('cursos')->insert([
            'id' =>'9',
            'titulo'=>'10°4',
            'año'=>'2021',
            'titulo_letras'=> 'DECIMO CUATRO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'10',
            'titulo'=>'9°1',
            'titulo_letras'=> 'NOVENO UNO',
            'año'=>'2021',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')   
        ]);
        DB::table('cursos')->insert([
            'id' =>'11',
            'titulo'=>'9°2',
            'año'=>'2021',
            'titulo_letras'=> 'NOVENO DOS',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'12',
            'titulo'=>'9°3',
            'año'=>'2021',
            'titulo_letras'=> 'NOVENO TRES',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'13',
            'titulo'=>'9°4',
            'año'=>'2021',
            'titulo_letras'=> 'NOVENO CUATRO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'14',
            'titulo'=>'9°5',
            'año'=>'2021',
            'titulo_letras'=> 'NOVENO CINCO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')   
        ]);
        DB::table('cursos')->insert([
            'id' =>'15',
            'titulo'=>'8°1',
            'año'=>'2021',
            'titulo_letras'=> 'OCTAVO UNO',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('cursos')->insert([
            'id' =>'16',
            'titulo'=>'8°2',
            'año'=>'2021',
            'titulo_letras'=> 'OCTAVO DOS',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
    }
}
