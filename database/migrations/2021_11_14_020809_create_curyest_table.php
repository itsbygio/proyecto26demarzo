<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuryestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cur_est', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_est')
            ->nullable()
            ->constrained('estudiantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('id_cur')
            ->nullable()
            ->constrained('cursos')
            ->onDelete('cascade')
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
        Schema::dropIfExists('cur_est');
    }
}
