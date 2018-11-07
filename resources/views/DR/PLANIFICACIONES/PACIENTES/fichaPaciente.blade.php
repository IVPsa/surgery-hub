     @extends('layouts.app')

@section('content')
<div class="card-body">


  <h3 class="text-center display-3">FICHA DE PACIENTE ID:##</h3>

  <div class="row">
    <div class="col-md-12">

        <h4 class="text-center "></h4>


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
                  <input type="date"  class="form-control">
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
                    <th>DESCRIPCION </th>
                    <th>ESTADO</th>
                    <th>TIPO</th>


                    <th width="150px" colspan="2" >ACCION</th>
                  </tr>
              </thead>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="{{route('crearPlanificacion')}}"><button type="button" class="btn btn-primary">USAR PARA PLANIFICACION</button></a>
                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                </td>
              </tr>
            </table>

        </div>
      </div>
    </div>
  </div>

<br />
<br />

  <div class="container">
    <div class="form-group row">
      <div class="col-12" align="center">
        <textarea class="form-control"  name="name" rows="8" cols="80">arrastre archivo aqui</textarea>
      </div>
    </div>

    <div class="form-group row">
      <label  for="first_name" class="  col-3 col-form-label text-right">FECHA DE ADQUISICION:</label>
      <div class="col-9">
        <input type="date"  class="form-control">
      </div>
    </div>
    <div class="form-group row">

      <div class="col-12  ">
        <button type="button" class="btn-primary form-control" name="button">SUBIR DICOM</button>
      </div>
    </div>

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
                    <th>DESCRIPCION </th>
                    <th>ESTADO</th>
                    <th>TIPO</th>


                    <th width="150px" colspan="2" >ACCION</th>
                  </tr>
              </thead>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <!-- <a href="{{route('crearPlanificacion')}}"><button type="button" class="btn btn-primary">VER</button></a> -->
                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                </td>
              </tr>
            </table>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
