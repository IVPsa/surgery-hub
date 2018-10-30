<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TPUTIPOUSUARIO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('TPU_TIPO_USUARIO', function (Blueprint $table) {
            $table->increments('TPU_COD');
            $table->string('TPU_DESC',45);
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
        Schema::dropIfExists('TPU_TIPOUSUARIO');
    }
}
