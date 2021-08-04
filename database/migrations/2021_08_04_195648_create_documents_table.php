<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->nullable()
            ->constrained('users')
            ->onDelete('no action')
            ->onUpdate('cascade');
            $table->foreignId('categories_id')
            ->nullable()
            ->constrained('categories')
            ->onDelete('no action')
            ->onUpdate('cascade');
            $table->foreignId('subcategories_id')
            ->nullable()
            ->constrained('subcategories')
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
        Schema::dropIfExists('documents');
    }
}
