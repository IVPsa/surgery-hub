@extends('layouts.app')
@section('content')
@include('layouts.messages')

<div class="card-body">
  <h3 class="text-center display-3">Pacientes</h3>

  <div class="row">
    <div class="col-md-12">
      <div class="row">

        <div class="col-md-6 col-sm-12" align="center">
             <a href="{{route('listadoDePacientes')}}">
               <button type="button" class="btn btn-success btn-lg" style="width:240px; height:200px;">
                 <i class="fa fa-list-alt" style="font-size:150px; width:202px;"></i>
                 <br />
                Listado De Pacientes
               </button>
            </a>
        </div>

        <div class="col-md-6 col-sm-12" align="center">
          <a href="{{route('ingresoDePaciente')}}">
            <button type="button" class="btn btn-success btn-lg " style="width:240px; height:200px;">
              <i class="fa fa-pencil-square-o" style="font-size:150px; width:202px;"></i>
              <br />
               Ingresar Paciente
            </button>
          </a>
        </div>

      </div>
    </div>

  </div>
</div>
@endsection
