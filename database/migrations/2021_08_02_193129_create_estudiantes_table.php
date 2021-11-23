<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150)->nullable();
            $table->string('apellidos',150)->nullable();
            $table->string('email',150)->unique();
            $table->string('contacto',25)->nullable();
            $table->string('tipo_doc',50)->nullable();
            $table->string('direccion',150)->nullable();
            $table->string('num_id',30)->nullable();
            $table->string('estado',50)->nullable();
            $table->date('fecha_f',)->nullable();
            $table->foreignId('id_curso')
            ->nullable()
            ->constrained('cursos')
            ->onDelete('no action')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('estudiantes');
    }
}
