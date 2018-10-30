<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DE_DIRECCIONES_ENVIO extends Model
{
    //
    protected $table ="DE_DIRECCIONES_ENVIO";

    protected $primaryKey = "DE_COD";

    protected $fillable = [


      'DE_CALLE',
      'DE_NUMERO',
      'DE_CIUDAD',
      'DE_REGION',
      'DE_USR_id'
    ];
    public function User()
    {
        return $this->hasOne('App\User', '{id', 'User');
    }
}
