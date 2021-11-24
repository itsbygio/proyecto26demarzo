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
            'ruta'=>'2.pdf', 
            'tipo' =>'Constancia',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'3',
            'titulo'=>'Certificado de notas',
            'ruta'=>'3.pdf', 
            'tipo' =>'Certificado',
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
            'id_est'=> null,
            'id_doc'=> '1',
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'5',
            'titulo'=>'Formato de circulares',
            'ruta'=>'5.pdf', 
            'tipo' => 'Circular',
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
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'8',
            'titulo'=>'Orden de cancelacion matricula paz y salvo',
            'ruta'=>  '8.pdf', 
            'tipo' => 'Orden',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'9',
            'titulo'=>'Informes de diplomas',
            'ruta'=>  '9.pdf', 
            'tipo' => 'Informe',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'10',
            'titulo'=>'Acta de grado',
            'ruta'=>  '10.pdf', 
            'tipo' => 'Acta',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'11',
            'titulo'=>'Diploma',
            'ruta'=>  '11.pdf', 
            'tipo' => 'Diploma',
            'id_est'=> '1',
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
        DB::table('documentos')->insert([
            'id' =>'12',
            'titulo'=>'Resolucion',
            'ruta'=>  '12.pdf', 
            'tipo' => 'Resolucion',
            'id_est'=> null,
            'id_doc'=> null,
            'id_user_c'=> '1',
            'id_user_m' =>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s') 
        ]);
    }
}
