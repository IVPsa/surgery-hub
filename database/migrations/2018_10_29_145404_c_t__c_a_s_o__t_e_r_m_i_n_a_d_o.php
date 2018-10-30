<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CTCASOTERMINADO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('CT_CASO_TERMINADO', function (Blueprint $table) {
            $table->increments('CT_COD');

            $table->text('CT_ARCHIVO_PLANIFICACION');
            $table->integer('CT_PLA_COD')->unsigned();
            $table->foreign('CT_PLA_COD')->references('PLA_COD')->on('PLA_PLANIFICACION');
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
        Schema::dropIfExists('CT_CASO_TERMINADO');
    }
}
