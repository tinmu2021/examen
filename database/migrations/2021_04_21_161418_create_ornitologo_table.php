<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrnitologoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ornitologo', function (Blueprint $table) {
            $table->integer('id', true)->comment('ID');          
            $table->timestamps();
            $table->string('DNI');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ornitologo');
    }
}
