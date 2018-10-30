<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GC_GUIA_QUIRURGICA extends Model
{
    //
    protected $table ="GC_GUIA_QUIRURGICA";

    protected $primaryKey = "GC_COD";

    protected $fillable = [

      'GC_COD',
      'GC_URL',
      'GC_CT_COD'
    ];

    public function CT_CASO_TERMINADO()
    {
        return $this->hasOne('App\CT_CASO_TERMINADO', '{CT_CASO_TERMINADO', 'CT_COD');
    }
}
