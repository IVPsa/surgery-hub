@extends('layouts.app')
@section('content')
@include('layouts.messages')
<div class="card-body">


  <h3 class="text-center display-3">FICHA DE PACIENTE ID:##</h3>

  <div class="row">
    <div class="col-md-12">

        <h4 class="text-center "></h4>


              @csrf


              <div class="form-group row">
                <label  for="first_name" class="  col-3 col-form-label text-right">RUT:</label>
                <div class="col-9">
                  <input type="text" value="{{$fichaPaciente->PC_RUT}}" readonly class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE:</label>
                <div class="col-9">
                  <input type="text" readonly value="{{$fichaPaciente->PC_NOMBRE}}" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label  for="first_name" class="  col-3 col-form-label text-right">APELLIDO:</label>
                <div class="col-9">
                  <input type="text" readonly value="{{$fichaPaciente->PC_APELLIDO}}" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE NACIMIENTO:</label>
                <div class="col-9">
                  <input type="date" readonly value="{{$fichaPaciente->PC_FECHA_NACIMENTO}}"class="form-control">
                </div>
              </div>

      </div>
    </div>

  </div>
<br />
<br />
  <h3 class="text-center display-3">DICOMS PACIENTE ID:##</h3>

  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="table-responsive" >
          <table class="table table-bordered table-hover  table-striped" align="center"  id="table">
              <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>FECHA </th>
                    <th width="150px" colspan="2" >ACCION</th>
                  </tr>
              </thead>
              @foreach ($CBCT as $listado)
              <tr>
                <td>{{$listado->DCM_COD}}</td>
                <td>{{$listado->DCM_FECHA}}</td>

                <td>
                  <a href="{{route('formularioCreacionDePlanificacion', $listado->DCM_COD)}}"><button type="button" class="btn btn-primary">USAR PARA PLANIFICACION</button></a>
                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                </td>
              </tr>
              @endforeach
            </table>

        </div>
      </div>
    </div>
  </div>

<br />
<br />

  <div class="container">
    <form class="" action="{{route('subirDicom')}}" method="post"  enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="text" name="idPaciente" hidden value="{{$fichaPaciente->PC_COD}}">

      <div class="form-group row">
        <label class="col-md-3 col-xs-12  col-form-label   text-right"> SELECCIONAR IMAGEN:</label>

         <input type="file"   class="form-control-file col-9 col-form  col-xs-12 " name="dicom"  id="files" />

      </div>

      <!-- <div class="form-group row">
        <div class="col-12" align="center">
          <textarea class="form-control"  name="name" rows="8" cols="80">arrastre archivo aqui</textarea>
        </div>
      </div> -->

      <div class="form-group row">
        <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE ADQUISICION:</label>
        <div class="col-9">
          <input type="date" name="fechaDicom"  required class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-12  ">
          <button type="submit" class="btn-primary form-control" name="button">SUBIR DICOM</button>
        </div>
      </div>

    </form>
  </div>

<br />
<br />

  <h3 class="text-center display-3">PLANIFICACIONES REALIZADAS</h3>

  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="table-responsive" >
          <table class="table table-bordered table-hover  table-striped" align="center"  id="table">
              <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>FECHA DE CREACION </th>
                    <th>ESTADO</th>
                    <th width="150px" colspan="2" >ACCION</th>
                  </tr>
              </thead>
              @foreach ($listadoPlanificaciones as $listaPlan)
              <tr>
                <td>{{$listaPlan->PLA_COD}}</td>
                <td>{{$listaPlan->created_at}}</td>
                <td>{{$listaPlan->PLA_ESTADO}}</td>
                <td>

                  <a href="{{route('fichaDePlanificacion', $listaPlan->PLA_COD)}}"><button type="button" class="btn btn-primary">VER FICHA</button></a>
                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                </td>
              </tr>
              @endforeach
            </table>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
