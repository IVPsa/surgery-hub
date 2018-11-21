<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PLA_PLANIFICACION extends Model
{
    //
    protected $table ="PLA_PLANIFICACION";

    protected $primaryKey = "PLA_COD";

    protected $fillable = [


      'PLA_PC_COD',
      'PLA_DCM_COD',
      'PLA_PROGRAMA',
      'PLA_ESTADO'
    ];

    public function DCM_DICOM()
    {
        return $this->hasOne('App\DCM_DICOM', '{DCM_COD', 'DCM_DICOM');
    }
}
