@extends('layouts.app')

@section('content')
<div class="card-body">
  <h3 class="text-center">Ingreso De paciente</h3>

  <form class="" action="index.html" method="post">
          <div class="container"  >
            @csrf
            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">RUT:</label>
              <div class="col-9">
                <input type="text"  class="form-control" name="RUT">
              </div>
            </div>

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE:</label>
              <div class="col-9">
                <input type="text"  class="form-control" name="NOMBRE">
              </div>
            </div>

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">APELLIDO:</label>
              <div class="col-9">
                <input type="text"  class="form-control" name="APELLIDO">
              </div>
            </div>

            <div class="form-group row">
              <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE NACIMIENTO:</label>
              <div class="col-9">
                <input type="date"  class="form-control" name="fechaNac">
              </div>
            </div>

            <div class="form-group row">

              <div class="col-12  ">
                <button type="button" class="btn-primary form-control" name="button">INGRESAR</button>
              </div>
            </div>


          </div>
  </form>

</div>

@endsection
