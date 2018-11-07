@extends('layouts.app')
@section('content')
<div class="card-body">
  <h3 class="text-center display-3">Planificaciones</h3>

  <div class="row">
    <div class="col-md-12">
      <div class="row">

        <div class="col-md-6 col-sm-12" align="center">
             <a href="{{route('indexPacientes')}}">
               <button type="button" class="btn btn-success btn-lg" style="width:280px; height:200px;">
                 <i class="fa fa-list-alt" style="font-size:150px; width:202px;"></i>
                 <br />
                 PACIENTES
               </button>
            </a>
        </div>

        <div class="col-md-6 col-sm-12" align="center">
          <a href="{{route('listaDePlanificaciones')}}">
            <button type="button" class="btn btn-success btn-lg " style="width:280px; height:200px;">
              <i class="fa fa-pencil-square-o" style="font-size:150px; width:202px;"></i>
              <br />
              LISTADO DE PLANIFICACIONES
            </button>
          </a>
        </div>

      </div>
    </div>

  </div>
</div>
@endsection
