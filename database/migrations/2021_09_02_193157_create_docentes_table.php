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
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('email')->unique();
            $table->string('contacto')->nullable();
            $table->string('tipo_doc')->nullable();
            $table->string('num_id')->nullable();
            $table->foreignId('id_user')
            ->nullable()
            ->constrained('users')
            ->onDelete('no action')
            ->onUpdate('cascade');
            $table->foreignId('id_doc')
            ->nullable()
            ->constrained('documentos')
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
        Schema::dropIfExists('docentes');
    }
}
