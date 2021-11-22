<?php

use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'nota' =>'5.0',
            'id_curso'=>'1',
            'id_materia'=>'5',
        ]);
    }
}
