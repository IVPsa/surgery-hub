@extends('layouts.app')

@section('content')
<div class="card-body">
  <h3 class="text-center display-3">LISTA DE PLANIFICACIONES</h3>

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
                    <th>ID</th>
                    <th>NOMBRE PACIENTE </th>
                    <th>RUT</th>
                    <th>FECHA DE CREACION</th>
                    <th>ESTADO</th>



                    <th width="100px" colspan="2" >ACCION</th>
                  </tr>
              </thead>
              @foreach ($listadoPlan as $listado)
              <tr>
                <td>{{$listado-> PC_COD}}</td>
                <td>{{$listado-> PC_NOMBRE}} {{$listado-> PC_APELLIDO}} </td>
                <td>{{$listado-> PC_RUT}}</td>
                <td>{{$listado->created_at}}</td>
                <td>{{$listado->PLA_ESTADO}}</td>
                <td>
                  <a href=""><button type="button" class="btn btn-primary">FICHA</button></a>
                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                </td>
              </tr>
              @endforeach
            </table>


      </div>
    </div>

  </div>
</div>
@endsection
