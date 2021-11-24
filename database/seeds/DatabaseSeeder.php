<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UserSeeder::class);
        //$this->call(cursos::class);
        //$this->call(estudiantesSeeder::class);
        //$this->call(materias::class);
        $this->call(DocumentosSeeder::class);
        //$this->call(NotasSeeder::class);
       //$this->call(DocentesSeeder::class);

    }
}
