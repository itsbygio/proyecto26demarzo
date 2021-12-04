<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150)->nullable();
            $table->string('apellidos',150)->nullable();
            $table->string('email',150)->nullable();
            $table->string('contacto',25)->nullable();
            $table->string('direccion',150)->nullable();
            $table->string('tipo_doc',50)->nullable();
            $table->string('sede',30)->nullable();
            $table->string('nivel',30)->nullable();
            $table->string('jornada',30)->nullable();
            $table->string('estado',50)->nullable();
            $table->string('escalafon',30)->nullable();
            $table->string('num_id',30)->nullable();
            $table->string('tp',255)->nullable();
            $table->string('ac',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
