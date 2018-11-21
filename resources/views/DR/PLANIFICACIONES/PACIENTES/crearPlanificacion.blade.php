@extends('layouts.app')
@section('content')

<div class="card-body">
  <h3 class="text-center display-3">CREACION DE PLANIFICACION</h3>

  <div class="row">
    <div class="col-md-12">
      <div class="container"  >
        <form class="" action="{{route('crearPlanificacion',$id)}}" method="post">
        @csrf
          @foreach ($datosPlanificacion as $datos)

          <input type="hidden" name="ID_PACIENTE" value="{{$datos->PC_COD}}">
            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">RUT:</label>
              <div class="col-9">
                <input type="text" readonly value="{{$datos->PC_RUT}}"  class="form-control" >
              </div>
            </div>

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE:</label>
              <div class="col-9">
                <input type="text"  readonly value="{{$datos->PC_NOMBRE}}" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">APELLIDO:</label>
              <div class="col-9">
                <input type="text"  readonly value="{{$datos->PC_APELLIDO}}"class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE NACIMIENTO:</label>
              <div class="col-9">
                <input type="text"  readonly value="{{$datos->PC_FECHA_NACIMENTO}}" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE DICOM::</label>
              <div class="col-9">
                <input type="date" name="fechaDicom" readonly value="{{$datos->DCM_FECHA}}" class="form-control">
              </div>
            </div>

            @endforeach

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">PROGRAMA DE PLANIFICACION:</label>
              <div class="col-9">
                <select class="form-control" name="programaPlanificacion">
                  <option value="Codiagnostix">Codiagnostix</option>
                  <option value="Blue Sky bio">Blue Sky bio</option>
                </select>
              </div>
            </div>

            <div class="form-group row">

              <div class="col-12  " >
                <button type="submit" class="btn-primary form-control" name="button">INGRESAR</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
