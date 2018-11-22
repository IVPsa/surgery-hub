<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMYMODELOYESOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MY_MODELO_YESO', function (Blueprint $table) {
            $table->increments('MY_COD');
            $table->text('MY_URL');
            $table->string('MY_NOMBRE',45);
            $table->integer('MY_PLA_COD')->unsigned();
            $table->foreign('MY_PLA_COD')->references('PLA_COD')->on('PLA_PLANIFICACION');
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
        Schema::dropIfExists('MY_MODELO_YESO');
    }
}
