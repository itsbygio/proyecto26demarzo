<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('nota')->nullable();
            $table->foreignId('id_curso')
            ->nullable()
            ->constrained('cursos')
            ->onDelete('no action')
            ->onUpdate('cascade');
            $table->foreignId('id_materia')
            ->nullable()
            ->constrained('materias')
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
        Schema::dropIfExists('notas');
    }
}
