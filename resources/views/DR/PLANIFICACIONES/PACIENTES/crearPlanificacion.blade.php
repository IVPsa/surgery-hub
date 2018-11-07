@extends('layouts.app')
@section('content')

<div class="card-body">
  <h3 class="text-center display-3">CREACION DE PLANIFICACION</h3>

  <div class="row">
    <div class="col-md-12">
      <div class="container"  >
        @csrf


        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">RUT:</label>
          <div class="col-9">
            <input type="text"  class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE:</label>
          <div class="col-9">
            <input type="text"  class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">APELLIDO:</label>
          <div class="col-9">
            <input type="text"  class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE NACIMIENTO:</label>
          <div class="col-9">
            <input type="text"  class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE DICOM::</label>
          <div class="col-9">
            <input type="date"  class="form-control">
          </div>
        </div>



        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">PROGRAMA DE PLANIFICACION:</label>
          <div class="col-9">
            <select class="form-control" name="">
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
        </div>

        <div class="form-group row">

          <div class="col-12  " >
            <button type="button" class="btn-primary form-control" name="button">INGRESAR</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
