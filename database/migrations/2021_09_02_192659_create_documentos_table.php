<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',150)->nullable();
            $table->string('ext',150)->nullable();
            $table->string('tipo',150)->nullable();
            $table->string('subtipo',150)->nullable();
            $table->string('nm',20)->nullable();
            $table->foreignId('id_est')
            ->nullable()
            ->constrained('estudiantes')
            ->onDelete('no action')
            ->onUpdate('cascade');
            $table->foreignId('id_doc')
            ->nullable()
            ->constrained('docentes')
            ->onDelete('no action')
            ->onUpdate('cascade');
            
            $table->string('id_user_c')->nullable();
            $table->string('id_user_m')->nullable();
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
        Schema::dropIfExists('documentos');
    }
}
