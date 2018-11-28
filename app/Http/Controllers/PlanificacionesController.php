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
use App\PD_PIEZAS_DENTALES;
use App\MY_MODELO_YESO;
use Illuminate\Support\Facades\Storage;

class PlanificacionesController extends Controller
{
    //

    public function registrarPaciente(Request $request){

      $rutPaciente=$request->input('RUT');
      $nombrePaciente= $request->input('NOMBRE');
      $apellidoPaciente=$request->input('APELLIDO');
      $fechaNacimiento=$request->input('fechaNac');
      $id = Auth::id();

      $registroDePaciente= PC_PACIENTE::create([
        'PC_RUT'=>$rutPaciente,
        'PC_NOMBRE'=>$nombrePaciente,
        'PC_APELLIDO'=>$apellidoPaciente,
        'PC_FECHA_NACIMENTO'=> $fechaNacimiento,
        'PC_USR_COD'=>$id,
        'updated_at'=> Carbon::now(),
        'created_at'=> Carbon::now()
      ]);

      if (!$registroDePaciente) {
        return redirect()->route('indexPacientes')->with('error', "No se pudo registrar el paciente");
      }

        return redirect()->route('indexPacientes')->with('success', "Se ha registrado correctamente un nuevo paciente.");
    }

    public function listadoDePacientes(){

      $listadoDepacientes=DB::table('PC_PACIENTE')->orderBy('PC_COD','ASC')->paginate();

      return view('DR.PLANIFICACIONES.PACIENTES.listadoDePacientes',compact('listadoDepacientes'));

    }

    public function fichaPaciente($id){

      $fichaPaciente = PC_PACIENTE::find($id);

      $CBCT= DB::table('DCM_DICOM')->where('DCM_PC_COD', $id)->get();

      $listadoPlanificaciones=DB::table('PLA_PLANIFICACION')
      ->join('DCM_DICOM', 'DCM_DICOM.DCM_COD', '=', 'PLA_PLANIFICACION.PLA_DCM_COD')
      ->select(
        'PLA_PLANIFICACION.PLA_COD',
        'PLA_PLANIFICACION.PLA_ESTADO',
        'PLA_PLANIFICACION.created_at'
        )->where('DCM_PC_COD', $id)->get();

      return view('DR.PLANIFICACIONES.PACIENTES.fichaPaciente', compact('fichaPaciente' ,'CBCT','listadoPlanificaciones'));
    }

    public function eliminarPaciente($id){

    $eliminarPaciente=  DB::table('PC_PACIENTE')->where('PC_COD', $id)->delete();

      if (!$eliminarPaciente) {
        return redirect()->route('indexPacientes')->with('error', "No se pudo eliminar el paciente");
      }

        return redirect()->route('indexPacientes')->with('success', "Se ha eliminado correctamente un nuevo paciente.");
    }

    public function listaDePlanificaciones(){

      $id= Auth::id();
      $listadoPlan=DB::table('PLA_PLANIFICACION')
      ->join('DCM_DICOM', 'DCM_DICOM.DCM_COD', '=', 'PLA_PLANIFICACION.PLA_DCM_COD')
      ->join('PC_PACIENTE', 'PC_PACIENTE.PC_COD', '=', 'DCM_DICOM.DCM_PC_COD')
      ->select(
        'PC_PACIENTE.PC_COD',
        'PC_PACIENTE.PC_NOMBRE',
        'PC_PACIENTE.PC_APELLIDO',
        'PC_PACIENTE.PC_RUT',
        'PLA_PLANIFICACION.PLA_ESTADO',
        'PLA_PLANIFICACION.created_at')
      ->where('PC_PACIENTE.PC_USR_COD',$id)->get();


      return view('DR.PLANIFICACIONES.listaDePlanificaciones', compact('listadoPlan'));
    }

    public function subirDicom(Request $request){

          $image=$request->file('dicom')->store('public');
          $fechaDicom=$request->input('fechaDicom');
          $id=$request->input('idPaciente');

          $subirImagen= DCM_DICOM::Create([
            'DCM_PC_COD'=>$id,
            'DCM_FECHA'=> $fechaDicom,
            'DCM_URL'=>'$image'
          ]);

          return redirect()->route('fichaDePaciente',$id);

    }

    public function subirStl(Request $request){

          $archivo=$request->file('ar3d')->store('public')>getClientOriginalName();


          $nombreArchivo = $request->file('ar3d')->getClientOriginalName();
          $id=$request->input('idPlan');

          $subirArchivo= MY_MODELO_YESO::Create([
            'MY_URL'=>$archivo,
            'MY_NOMBRE'=> $nombreArchivo,
            'MY_PLA_COD'=>$id,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
          ]);


          return redirect()->route('fichaDePlanificacion',$id);

    }

    public function  formularioCreacionDePlanificacion($id){


      $datosPlanificacion = DB::table('DCM_DICOM')
            ->join('PC_PACIENTE', 'PC_PACIENTE.PC_COD', '=', 'DCM_DICOM.DCM_PC_COD')
            ->select(
              'PC_PACIENTE.PC_COD',
              'PC_PACIENTE.PC_NOMBRE',
              'PC_PACIENTE.PC_APELLIDO',
              'PC_PACIENTE.PC_RUT',
              'PC_PACIENTE.PC_FECHA_NACIMENTO',
              'DCM_DICOM.DCM_FECHA'
              )
            ->where('DCM_DICOM.DCM_COD', $id)
            ->get();


      return view('DR.PLANIFICACIONES.PACIENTES.crearPlanificacion', compact( 'datosPlanificacion','id'));
    }

    public function crearPlanificacion(Request $request, $id){


      $programaPlanificacion=$request->input('programaPlanificacion');

      $registroDePlanificacion= PLA_PLANIFICACION::create([
        'PLA_DCM_COD'=>$id,
        'PLA_PROGRAMA'=>$programaPlanificacion,
        'PLA_ESTADO'=>'En Espera',

      ]);

      $codPaciente=$request->input('ID_PACIENTE');

      if (!$registroDePlanificacion) {
        return redirect()->route('fichaPaciente', $codPaciente)->with('error', "No se pudo crear la planificacion ");
      }

        return redirect()->route('fichaDePaciente', $codPaciente)->with('success', "Se ha creado correctamente una nueva Planificacion.");
    }

    public function fichaDePlanificacion($id){

        $infoPlanificacion = PLA_PLANIFICACION::find($id);

        $piezasDentales=PD_PIEZAS_DENTALES::all();

        $infoDicom= DB::table('PLA_PLANIFICACION')->where('PLA_COD', $id)->value('PLA_DCM_COD');

        $CodPaciente=DB::table('DCM_DICOM')->where('DCM_COD', $infoDicom)->value('DCM_PC_COD');

        $infoPaciente=PC_PACIENTE::find($CodPaciente);

        $modelos3d=DB::table('MY_MODELO_YESO')->where('MY_PLA_COD', $id)->get();

        $piezasPlanificacion= DB::table('PDPLAN_PIEZAS_DENTAL')
        ->join('PD_PIEZAS_DENTALES', 'PDPLAN_PIEZAS_DENTAL.PDPLAN_PD_COD', '=', 'PD_PIEZAS_DENTALES.PD_COD')
        ->where('PDPLAN_PLA_COD',$id)->get();

        return view('DR.PLANIFICACIONES.fichaDePlanificacion', compact('infoPlanificacion','piezasDentales','infoPaciente','piezasPlanificacion','modelos3d'));
    }

    public function AgregarDiente(Request $request){

        $diente=$request->input('diente');
        $id=$request->input('codPlan');
        $comprobarDienteRepetido=DB::table('PDPLAN_PIEZAS_DENTAL')
        ->select('PDPLAN_PD_COD')
        ->where('PDPLAN_PD_COD', $diente)
        ->where('PDPLAN_PLA_COD',$id)->count();

        if ($comprobarDienteRepetido == 1){
            return redirect()->route('fichaDePlanificacion',$id)->with('error', "Ya esta este diente ingresado, por favor seleccione otro.");
        }
        else{

          $agregarDiente=$request->input();

          $agregarDiente= PDPLAN_PIEZAS_DENTAL::create([
            'PDPLAN_PD_COD'=>$diente,
            'PDPLAN_PLA_COD'=>$id,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
          ]);


          return redirect()->route('fichaDePlanificacion',$id);
        }

    }

    public function eliminarDiente(Request $request){
          $ficha=$request->input('codPlan');

          $id=$request->input('codDiente');
          $eliminarDiente=  DB::table('PDPLAN_PIEZAS_DENTAL')->where('PDPLAN_PD_COD', $id)->delete();

            if (!$eliminarDiente) {
                return redirect()->route('fichaDePlanificacion',$ficha)->with('error', "No se pudo eliminar el paciente");
            }

              return redirect()->route('fichaDePlanificacion',$ficha)->with('success', "Se ha eliminado correctamente el Diente.");
    }

}
