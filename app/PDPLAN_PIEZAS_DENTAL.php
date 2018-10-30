<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PDPLAN_PIEZAS_DENTAL extends Model
{
    //

    protected $table ="PDPLAN_PIEZAS_DENTAL";

    protected $primaryKey = "PDPLAN_COD";

    protected $fillable = [

      'PDPLAN_PD_COD',
      'PDPLAN_PLA_COD'
    ];


    public function PD_PIEZAS_DENTALES()
    {
        return $this->hasMany('App\PD_PIEZAS_DENTALES', '{PD_PIEZAS_DENTALES', 'PD_COD');
    }

    public function PLA_PLANIFICACION()
    {
        return $this->hasMany('App\PLA_PLANIFICACION', '{PLA_PLANIFICACION', 'PDPLAN_COD');
    }
}
