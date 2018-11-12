@extends('layouts.app')

@section('content')
<div class="card-body">
  <h3 class="text-center display-3">SOLICITUD DE IMPRESION 3D</h3>

  <div class="row">
    <div class="col-md-12">
      <form class="" action="index.html" method="post">
              <div class="container"  >
                @csrf


                <div class="form-group row">
                  <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE DE ARCHIVO:</label>
                  <div class="col-7">
                    <input type="text" name="ArchivoNombre"  class="form-control">
                  </div>
                  <div class="col-2">
                    <button type="button" class="btn-primary form-control" name="button">examinar</button>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-12" align="center">
                    <textarea class="form-control" name="archivo3d" rows="8" cols="80">arrastre archivo aqui</textarea>
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
                    <select class="form-control" name="tpArchivoImpresion" >
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label  for="first_name" class="  col-3 col-form-label text-right">UBICACIONES DE ENVIO</label>
                  <div class="col-9">
                    <select class="form-control" name="">
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">

                  <div class="col-12  ">
                    <button type="button" class="btn-primary form-control" name="button">ENVIAR</button>
                  </div>
                </div>

              </div>
      </form>
    </div>

  </div>
</div>
@endsection
