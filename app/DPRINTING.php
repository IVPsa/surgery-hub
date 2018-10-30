<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DPRINTING extends Model
{
    //
    protected $table ="3DP_3D_PRINTING";

    protected $primaryKey = "3DP_COD";

    protected $fillable = [


      '3DP_URL',
      '3DP_DESC',
      '3DP_ESTADO',
      '3DP_TIPO',
      '3DP_VALOR',
      '3DP_USR_id',
      '3DP_DE_COD'
    ];

    public function DE_DIRECCIONES_ENVIO()
    {
        return $this->hasOne('App\DE_DIRECCIONES_ENVIO', '{DE_COD', 'DE_DIRECCIONES_ENVIO');
    }

    public function User()
    {
        return $this->hasOne('App\User', '{id', 'User');
    }
}
