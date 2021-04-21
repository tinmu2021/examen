<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvistamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avistamiento', function (Blueprint $table) {
            $table->integer('id', true)->comment('ID');           
             $table->timestamps();
            $table->integer('ornitologo_id',)->nullable()->index('ornitologo_id')->comment('Llave foranea hacia ornitologo');
            $table->integer('ave_id',)->nullable()->index('ave_id')->comment('Llave foranea hacia ave');
            $table->string('ubicacion-latitud');
            $table->string('ubicacion-longitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avistamiento');
    }
}
