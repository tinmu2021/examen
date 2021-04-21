<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignOrnitologAvistamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('avistamiento',function (Blueprint $table) {
            $table->foreign('ornitologo_id', 'ornitologo_ibfk')->references('id')->on('ornitologo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ave_id', 'ave_ibfk')->references('id')->on('ave')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avisamiento', function (Blueprint $table) {
        $table->dropForeign('ornitologo_ibfk');
        $table->dropForeign('ave_ibfk');
       
        });
    }
        
}
