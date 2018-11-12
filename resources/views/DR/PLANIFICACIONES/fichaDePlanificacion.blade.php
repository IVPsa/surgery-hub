@extends('layouts.app')

@section('content')
<div class="card-body">
  <h3 class="text-center display-3">FICHA DE PLANIFICACION ID:##</h3>
  <h4 class="text-center ">FICHA DE PACIENTE</h4>

  <div class="row">
    <div class="col-md-12">
      <div class="container"  >
        @csrf


        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">RUT:</label>
          <div class="col-9">
            <input type="text" readonly   class="form-control" name="RUT">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE:</label>
          <div class="col-9">
            <input type="text" readonly  class="form-control" name="NOMBRE">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">APELLIDO:</label>
          <div class="col-9">
            <input type="text" readonly class="form-control" name="APELLIDO">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE NACIMIENTO:</label>
          <div class="col-9">
            <input type="date" readonly class="form-control" name="fechaNac">
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

              <tr>

                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-danger">ELIMINAR</button></td>
              </tr>
              <tr>

                <td></td>
                <td></td>
                <td>

                </td>
              </tr>
            </table>


        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">agregar Diente:</label>
          <div class="col-6">
            <select class="form-control" name="DIENTE">
              <option value=""></option>
            </select>
          </div>
        <div class="col-3">
          <a href="{{route('fichaDeImpresion')}}"><button type="button" class="btn btn-success">agregar</button></a>
        </div>

    </div>
  </div>
</div>
@endsection
