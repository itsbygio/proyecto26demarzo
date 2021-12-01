<?php

use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
     
        DB::table('documentos')->insert([
            'id' =>'1',
            'titulo'=>'CIRCULAR NO. 018',
            'ext'=>'.pdf', 
            'tipo' =>'Circular',
            'subtipo' =>'Ninguno',
            'nm'=>'cir',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'2',
            'titulo'=>'Constancia de estudio',
            'ext'=>'.pdf', 
            'tipo' =>'Constancia',
            'subtipo' =>'Constancia de estudio',
            'nm'=>'cone',
            'id_est'=> '8',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'3',
            'titulo'=>'Certificado de nota',
            'ext'=>'.pdf', 
            'tipo' =>'Certificado',
            'subtipo' =>'Certificado de nota',
            'nm'=>'cen',
            'id_est'=> '9',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
    }
}