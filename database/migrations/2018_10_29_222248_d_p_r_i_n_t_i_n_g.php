<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DPRINTING extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      //
      Schema::create('3DP_3D_PRINTING', function (Blueprint $table) {
          $table->increments('3DP_COD');
          $table->text('3DP_URL');
          $table->text('3DP_DESC');
          $table->string('3DP_ESTADO',45);
          $table->string('3DP_TIPO',45);
          $table->integer('3DP_VALOR');

          $table->integer('3DP_USR_id')->unsigned();
          $table->foreign('3DP_USR_id')->references('id')->on('users');
          $table->integer('3DP_DE_COD')->unsigned();
          $table->foreign('3DP_DE_COD')->references('DE_COD')->on('DE_DIRECCIONES_ENVIO');

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
        Schema::dropIfExists('3DP_3D_PRINTING');
  }
}
