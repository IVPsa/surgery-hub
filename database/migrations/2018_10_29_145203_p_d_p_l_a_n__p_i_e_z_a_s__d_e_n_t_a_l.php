<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PDPLANPIEZASDENTAL extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('PDPLAN_PIEZAS_DENTAL', function (Blueprint $table) {
            $table->increments('PDPLAN_COD');

            $table->integer('PDPLAN_PD_COD')->unsigned();
            $table->foreign('PDPLAN_PD_COD')->references('PD_COD')->on('PD_PIEZAS_DENTALES');

            $table->integer('PDPLAN_PLA_COD')->unsigned();
            $table->foreign('PDPLAN_PLA_COD')->references('PLA_COD')->on('PLA_PLANIFICACION');

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
        //
            Schema::dropIfExists('PD_PIEZAS_DENTALES');
    }
}
