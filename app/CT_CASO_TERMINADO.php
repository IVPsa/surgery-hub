<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CT_CASO_TERMINADO extends Model
{
    //
    protected $table ="CT_CASO_TERMINADO";

    protected $primaryKey = "CT_COD";

    protected $fillable = [

      'CT_ARCHIVO_PLANIFICACION',
      'CT_PLA_COD'
    ];

    public function PLA_PLANIFICACION()
    {
        return $this->hasOne('App\PLA_PLANIFICACION', '{PLA_PLANIFICACION', 'PLA_COD');
    }

  
}
