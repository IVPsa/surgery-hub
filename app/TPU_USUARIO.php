<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPU_USUARIO extends Model
{
    //
    //
    protected $table ="TPU_TIPO_USUARIO";

    protected $primaryKey = "TPU_COD";

    protected $fillable = [


      'TPU_DESC'
    ];
}
