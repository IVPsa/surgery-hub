@extends('layouts.app')
@section('content')
<div class="card-body">
  <h3 class="text-center display-3">MIS DATOS</h3>

  <div class="row">
    <div class="col-md-12">


        <h4 class="text-center ">DATOS PERSONALES</h4>


        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">RUT:</label>
          <div class="col-9">
            <input type="text" value="" readonly class="form-control">
          </div>
        </div>


        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">NOMBRE:</label>
          <div class="col-9">
            <input type="text" value="" readonly class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">TELEFONO:</label>
          <div class="col-9">
            <input type="text" value="" readonly class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label  for="first_name" class="  col-3 col-form-label text-right">EMAIL:</label>
          <div class="col-9">
            <input type="text" value="" readonly class="form-control">
          </div>
        </div>


    </div>

  </div>

  <div class="row">
    <div class="col-md-12">

      <h4 class="text-center ">DIRECCIONES DE ENVIO</h4>

      <div class="form-group row">
        <label  for="first_name" class="  col-3 col-form-label text-right">CALLE:</label>
        <div class="col-9">
          <input type="text" value="" readonly class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label  for="first_name" class="  col-3 col-form-label text-right">NUMERO:</label>
        <div class="col-9">
          <input type="text" value="" readonly class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label  for="first_name" class="  col-3 col-form-label text-right">CIUDAD:</label>
        <div class="col-9">
          <input type="text" value="" readonly class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label  for="first_name" class="  col-3 col-form-label text-right">CODIGO POSTAL:</label>
        <div class="col-9">
          <input type="text" value="" readonly class="form-control">
        </div>
      </div>

      <div class="form-group row">

        <div class="col-12">
          <center>
            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modalAgregarDireccion" data-whatever="@getbootstrap" name="button">Agregar Direccion</button>
          </center>

          <div class="modal fade" id="modalAgregarDireccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Agregar una direccion De Envio</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group row">
                      <label  for="first_name" class="  col-3 col-form-label text-right">CALLE:</label>
                      <div class="col-9">
                        <input type="text" value=""  class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  for="first_name" class="  col-3 col-form-label text-right">NUMERO:</label>
                      <div class="col-9">
                        <input type="text" value=""  class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  for="first_name" class="  col-3 col-form-label text-right">CIUDAD:</label>
                      <div class="col-9">
                        <input type="text" value=""  class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  for="first_name" class="  col-3 col-form-label text-right">CODIGO POSTAL:</label>
                      <div class="col-9">
                        <input type="text" value=""  class="form-control">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                  <button type="button" class="btn btn-primary">Send message</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>
@endsection
