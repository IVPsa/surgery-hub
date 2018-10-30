<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GCGUIAQUIRURGICA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('GC_GUIA_QUIRURGICA', function (Blueprint $table) {
            $table->increments('GC_COD');
            $table->text('GC_URL');

            $table->integer('GC_CT_COD')->unsigned();
            $table->foreign('GC_CT_COD')->references('CT_COD')->on('CT_CASO_TERMINADO');
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
        Schema::dropIfExists('GC_GUIA_QUIRURGICA');
    }
}
