@extends('layouts.app')
@section('content')
@include('layouts.messages')
<div class="card-body">
  <h3 class="text-center display-3">FICHA DE PLANIFICACION ID: {{$infoPlanificacion->PLA_COD}}</h3>
  <h4 class="text-center ">FICHA DE PACIENTE</h4>

  <div class="row">
    <div class="col-md-12">
      <div class="container"  >
        @csrf


        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">RUT:</label>
          <div class="col-9">
            <input type="text" readonly value="{{$infoPaciente->PC_RUT}}"   class="form-control" name="RUT">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE:</label>
          <div class="col-9">
            <input type="text" readonly value="{{$infoPaciente->PC_NOMBRE}}"  class="form-control" name="NOMBRE">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">APELLIDO:</label>
          <div class="col-9">
            <input type="text" readonly value="{{$infoPaciente->PC_APELLIDO}}" class="form-control" name="APELLIDO">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE NACIMIENTO:</label>
          <div class="col-9">
            <input type="date" readonly value="{{$infoPaciente->PC_FECHA_NACIMENTO}}" class="form-control" name="fechaNac">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">ESTADO:</label>
          <div class="col-9">
            <input type="text" readonly value="{{$infoPlanificacion->PLA_ESTADO}}" class="form-control" name="estado">
          </div>
        </div>


      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h4 class="text-center ">PIEZAS A PLANIFICAR</h4>

        <div class="table-responsive" >
          <table class="table table-bordered table-hover  table-striped" align="center"  id="table">
              <thead class="thead-dark">
                  <tr>
                    <th>NUMERO</th>
                    <th>DIENTE </th>



                    <th width="100px" >ACCION</th>
                  </tr>
              </thead>
              @foreach ($piezasPlanificacion as $piezasPlan)
              <tr>

                <td>{{$piezasPlan->PD_NUMERO}}</td>
                <td>{{$piezasPlan->PD_NOMBRE}}</td>
                <td>
                  <form class="" action="{{route('eliminarDiente')}}" method="post">
                      @csrf
                    <input type="hidden" name="codDiente" value="{{$piezasPlan->PDPLAN_PD_COD}})">
                    <input type="hidden" name="codPlan" value="{{$piezasPlan->PDPLAN_PLA_COD}}">
                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                  </form>
                </td>
              </tr>
              @endforeach

            </table>


        </div>

        <form class="" action="{{route('AgregarDiente')}}" method="post">
        @csrf
          <div class="form-group row">
            <label  for="first_name" class="  col-3 col-form-label text-right">AGREGAR DIENTE:</label>
            <div class="col-6">
                <select class="form-control" name="diente">
                  @foreach ($piezasDentales as $diente)
                  <option  value="{{$diente->PD_COD}}">{{$diente->PD_NUMERO}} - {{$diente->PD_NOMBRE}}</option>
                  @endforeach
                </select>
            </div>
            <input type="hidden" name="codPlan" value="{{$infoPlanificacion->PLA_COD}}">
          <div class="col-3">
            <button type="submit" class="btn btn-success">agregar</button>
          </div>

          </div>
        </form>
  </div>
</div>
@endsection
