@extends('layouts.app')

@section('content')
<div class="card-body">
  <h3 class="text-center display-3">FICHA DE IMPRESION</h3>

  <div class="row">
    <div class="col-md-12">
      <div class="container"  >
        @csrf


        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE DE ARCHIVO:</label>
          <div class="col-9">
            <input type="text"  class="form-control">
          </div>

        </div>



        <div class="form-group row">
          <div class="col-12" align="center">
            <textarea class="form-control"  name="name" rows="8" cols="80">vista previa</textarea>
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">TIPO:</label>
          <div class="col-9">
            <input type="text" name="" value="" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">UBICACIONES DE ENVIO</label>
          <div class="col-6">
          <input type="text" name="" value="" class="form-control">
          </div>
          <div class="col-3  ">
            <button type="button" class="btn-primary form-control" name="button">ACTUALIZAR</button>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
@endsection
