<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Perfil extends Controller
{
    //
    public function DatosPersonales(){

      return view('DR.MISDATOS.misDatosPersonales');
    }

}