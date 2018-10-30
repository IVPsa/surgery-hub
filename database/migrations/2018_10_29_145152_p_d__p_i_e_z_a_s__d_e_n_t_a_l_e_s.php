<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PDPIEZASDENTALES extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('PD_PIEZAS_DENTALES', function (Blueprint $table) {
            $table->increments('PD_COD');
            $table->string('PD_NOMBRE',45);
            $table->string('PD_NUMERO',45);
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
