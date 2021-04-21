<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ave', function (Blueprint $table) {
            $table->integer('id', true)->comment('ID');
            $table->timestamps();
            $table->string('NombreComun');
            $table->string('NombreCientifico');
            $table->string('Familia');
            $table->string('Especie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ave');
    }
}
