<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DEDIRECCIONESENVIO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('DE_DIRECCIONES_ENVIO', function (Blueprint $table) {
            $table->increments('DE_COD');
            $table->string('DE_CALLE',45);
            $table->string('DE_NUMERO',45);
            $table->string('DE_CIUDAD',45);
            $table->string('DE_REGION',45);
            $table->integer('DE_USR_id')->unsigned();
            $table->foreign('DE_USR_id')->references('id')->on('users');
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
        Schema::dropIfExists('DE_DIRECCIONES_ENVIO');


    }
}
