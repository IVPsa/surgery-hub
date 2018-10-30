<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DCM_DICOM extends Model
{
    //
    //
    protected $table ="DCM_DICOM";

    protected $primaryKey = "DCM_COD";

    protected $fillable = [


      'DCM_FECHA',
      'DCM_URL',
      'DCM_PC_COD',

    ];

    public function PC_PACIENTE()
    {
        return $this->hasOne('App\PC_PACIENTE', '{PC_PACIENTE', 'PC_COD');
    }
}
