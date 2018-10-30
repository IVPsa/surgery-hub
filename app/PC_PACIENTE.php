<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PC_PACIENTE extends Model
{
    //
    protected $table ="PC_PACIENTE";

    protected $primaryKey = "PC_COD";

    protected $fillable = [


      'PC_RUT',
      'PC_NOMBRE',
      'PC_APELLIDO',
      'PC_FECHA_NACIMENTO',
      'PC_USR_COD'
    ];

    public function User()
    {
        return $this->hasOne('App\User', '{id', 'User');
    }
}
