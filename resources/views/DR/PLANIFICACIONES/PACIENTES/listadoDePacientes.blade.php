@extends('layouts.app')

@section('content')
<div class="card-body">
  <h3 class="text-center display-3">LISTA DE PACIENTES</h3>

    <div class="form-group row">

        <label  for="first_name" class="col-3 col-form-label text-right" >Buscar Por Nombre:</label>
        <div class="col-8">
          <input type="text" class="form-control"  name="datoAbuscar"  >
        </div>
        <div class="col-1">
          <button type="submit" class="btn btn-lg  btn-success"> <i class="fa fa-search"></i></button>
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="table-responsive" >
          <table class="table table-bordered table-hover  table-striped" align="center"  id="table">
              <thead class="thead-dark">
                  <tr>
                    <th>RUT</th>
                    <th>NOMBRE </th>
                    <th>APELLIDO  </th>
                    <th>FECHA NACIMIENTO</th>
                    <th width="50px" colspan="2" >ACCION</th>
                  </tr>
              </thead>
            @foreach ($listadoDepacientes as $lista)
              <tr>
                <td>{{$lista->PC_RUT}}</td>
                <td>{{$lista->PC_NOMBRE}}</td>
                <td>{{$lista->PC_APELLIDO}}</td>
                <td>{{$lista->PC_FECHA_NACIMENTO}}</td>
                <td>
                  <a href="{{route('fichaDePaciente', $lista->PC_COD)}}"><button type="button" class="btn btn-primary">FICHA</button></a>
                  <a href="{{route('eliminarPaciente', $lista->PC_COD)}}"><button type="button" class="btn btn-danger">ELIMINAR</button></a>
                </td>
              </tr>
              @endforeach
            </table>


      </div>
    </div>

  </div>
</div>
@endsection
