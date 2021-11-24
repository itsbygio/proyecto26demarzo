<?php

use Illuminate\Database\Seeder;

class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'id' =>'1',
            'nombre'=>'Julio',
            'apellidos'=>'Diaz',
            'email'=>'diaz@example.com',
            'contacto' =>'12323223',
            'tipo_doc'=>'CC',
            'num_id'=>'2121212123',
            'estado' =>'activo',
            'direccion'=>'CALLE 60-45',
             'escalafon'=>null,
             'tp' =>'Maestria en educacion',
             'ac' =>'Matematicas',
             'created_at' =>date('Y-m-d H:i:s'),
             'updated_at' =>date('Y-m-d H:i:s'),

          ]);
    }
}
