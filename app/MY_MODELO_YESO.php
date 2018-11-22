<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MY_MODELO_YESO extends Model
{
    //

    //
    protected $table ="MY_MODELO_YESO";

    protected $primaryKey = "MY_COD";

    protected $fillable = [

      'MY_URL',
      'MY_NOMBRE',
      'MY_PLA_COD'
    ];

    public function PLA_PLANIFICACION()
    {
        return $this->hasMany('App\PLA_PLANIFICACION', '{PLA_PLANIFICACION', 'PDPLAN_COD');
    }
}
