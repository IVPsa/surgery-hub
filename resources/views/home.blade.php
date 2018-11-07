@extends('layouts.app')

@section('content')
  <div class="card-body">

            <h3 class="display-3 text-center">Bienvenido {{ Auth::user()->name }}</h3>
            <br />
            <center>


                <a href="{{route('IndexPlanificaciones')}}"><button type="button" class="btn btn-info"><i class="fa fa-clipboard" style="font-size:150px; width:202px;"></i> <br> PLANIFICACIONES</button></a>
                <a href="{{route('index3Dprinting')}}"><button type="button" class="btn btn-warning"> <i class="fa fa-archive" style="font-size:150px; width:202px;"></i> <br> 3D PRINTING</button></a>
                <a href=""><button type="button" class="btn btn-dark"> <i class="fa fa-user-md" style="font-size:150px; width:202px;"></i> <br> MIS DATOS</button></a>


            </center>

  </div>
@endsection
