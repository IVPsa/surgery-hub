<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PD_PIEZAS_DENTALES extends Model
{
    //
    protected $table ="PD_PIEZAS_DENTALES";

    protected $primaryKey = "PD_COD";

    protected $fillable = [

      'PD_NOMBRE',
      'PD_NUMERO'
    ];

    
}
