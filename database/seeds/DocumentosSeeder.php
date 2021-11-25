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
            'ruta'=>'1.pdf', 
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
            'ruta'=>'2.pdf', 
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
            'ruta'=>'3.pdf', 
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
            'ruta'=>'4.pdf', 
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
            'ruta'=>  '5.pdf', 
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
            'ruta'=>'6.pdf', 
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
            'ruta'=>'7.pdf', 
            'tipo' => 'Citacion',
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
            'ruta'=>  '8.pdf', 
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
            'ruta'=>  '9.pdf', 
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
            'ruta'=>  '10.pdf', 
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
            'ruta'=>  '10.pdf', 
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
            'ruta'=>  '11.pdf', 
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
            'ruta'=>  '12.pdf', 
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