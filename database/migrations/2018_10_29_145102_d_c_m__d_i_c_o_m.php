<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DCMDICOM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('DCM_DICOM', function (Blueprint $table) {
            $table->increments('DCM_COD');
            $table->date('DCM_FECHA');
            $table->text('DCM_URL');
            $table->integer('DCM_PC_COD')->unsigned();
            $table->foreign('DCM_PC_COD')->references('PC_COD')->on('PC_PACIENTE');
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

        Schema::dropIfExists('PC_PACIENTE');
    }
}
