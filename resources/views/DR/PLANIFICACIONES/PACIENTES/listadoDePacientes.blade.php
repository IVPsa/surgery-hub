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
                    <th>ID</th>
                    <th>DESCRIPCION </th>
                    <th>ESTADO</th>
                    <th>TIPO</th>


                    <th width="100px" colspan="2" >ACCION</th>
                  </tr>
              </thead>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="{{route('fichaDePaciente')}}"><button type="button" class="btn btn-primary">FICHA</button></a>
                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                </td>
              </tr>
            </table>


      </div>
    </div>

  </div>
</div>
@endsection
