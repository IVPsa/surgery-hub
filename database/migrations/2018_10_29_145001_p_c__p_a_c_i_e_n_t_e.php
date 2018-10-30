<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PCPACIENTE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('PC_PACIENTE', function (Blueprint $table) {
            $table->increments('PC_COD');
            $table->string('PC_RUT',12);
            $table->string('PC_NOMBRE',45);
            $table->string('PC_APELLIDO',45);
            $table->date('PC_FECHA_NACIMENTO');
            $table->integer('PC_USR_COD')->unsigned();
            $table->foreign('PC_USR_COD')->references('id')->on('users');
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
