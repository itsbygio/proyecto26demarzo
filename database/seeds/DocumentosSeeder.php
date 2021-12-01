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
            'titulo'=>'Acta de reunion',
            'ext'=>'.pdf', 
            'tipo' =>'Acta',
            'subtipo' =>'Acta de reunion',
            'nm'=>'acr',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'2',
            'titulo'=>'Constancia',
            'ext'=>'.pdf', 
            'tipo' =>'Constancia',
            'subtipo'=>'Constancia de estudio',
            'nm'=>'cone',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'3',
            'titulo'=>'Certificado',
            'ext'=>'.pdf', 
            'tipo' =>'Certificado',
            'subtipo' =>'Certificado de notas',
            'nm'=>'cen',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'4',
            'titulo'=>'Permiso de docente',
            'ext'=>'.pdf', 
            'tipo' =>'Permiso',
            'subtipo' =>'Permiso de docente',
            'nm'=>'pd',
            'id_est'=> null,
            'id_doc'=> '1',
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' => '5',
            'titulo'=> 'Formato de circulares',
            'ext'=>  '.pdf', 
            'tipo' => 'Circular',
            'subtipo'=> null,
            'nm'=>'cir',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'6',
            'titulo'=>'Informe academico',
            'ext'=>'.pdf', 
            'tipo' => 'Informe',
            'subtipo'=>'Informe Academico',
            'nm' => 'ia',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'7',
            'titulo'=>'Citacion de docentes',
            'ext'=>'.pdf', 
            'ext' => 'Citacion',
            'subtipo' => 'Citacion de docentes',
            'nm' => 'cd',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'8',
            'titulo'=>'Orden de cancelacion matricula',
            'ext'=>  '.pdf', 
            'tipo' => 'Orden ',
            'subtipo' => 'Orden de cancelacion matricula',
            'nm' => 'orcm',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'9',
            'titulo'=>'Paz y salvo estudiante',
            'ext'=>  '.pdf', 
            'tipo' => 'Paz y Salvo',
            'subtipo' => null,
            'nm' => 'pys',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'10',
            'titulo'=>'Informes de diplomas',
            'ext'=>  '.pdf', 
            'tipo' => 'Informe',
            'subtipo' => 'Informe de diplomas',
            'nm' => 'ifp',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'11',
            'titulo'=>'Acta de grado',
            'ext'=>  '10.pdf', 
            'tipo' => 'Acta',
            'subtipo'=>'Acta de grado',
            'nm' => 'acg',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'12',
            'titulo'=>'Diploma',
            'ext'=>  '11.pdf', 
            'tipo' => 'Diploma',
            'subtipo'=> null,
            'nm' => 'dp',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'13',
            'titulo'=>'Resolucion',
            'ext'=>  '12.pdf', 
            'tipo' => 'Resolucion',
            'subtipo'=> null,
            'nm' => 'rs',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
    }
}