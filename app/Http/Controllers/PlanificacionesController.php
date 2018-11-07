<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

use App\User;
use App\TPU_TIPO_USUARIO;
use App\PC_PACIENTE;
use App\DCM_DICOM;

use App\GC_GUIA_QUIRURGICA;
use App\PLA_PLANIFICACION;
use App\CT_CASO_TERMINADO;
use App\PDPLAN_PIEZAS_DENTAL;

class PlanificacionesController extends Controller
{
    //
}
