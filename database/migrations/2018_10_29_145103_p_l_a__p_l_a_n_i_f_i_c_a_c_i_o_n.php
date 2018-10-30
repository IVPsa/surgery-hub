<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PLAPLANIFICACION extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('PLA_PLANIFICACION', function (Blueprint $table) {
            $table->increments('PLA_COD');
            $table->string('PLA_PROGRAMA', 45);
            //$table->integer('PLA_PC_COD')->unsigned();
            // $table->foreign('PLA_PC_COD')->references('PC_COD')->on('PC_PACIENTE');
            $table->integer('PLA_DCM_COD')->unsigned();
            $table->foreign('PLA_DCM_COD')->references('DCM_COD')->on('DCM_DICOM');
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
        Schema::dropIfExists('PLA_PLANIFICACION');
    }
}
