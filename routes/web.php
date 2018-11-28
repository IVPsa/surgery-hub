<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas planificacion
Route::group(['prefix'=>'Planificaciones'],function () {

  Route::view('/IndexPlanificaciones', 'DR.PLANIFICACIONES.IndexPlanificaciones')->name('IndexPlanificaciones');


  Route::get('/listaDePlanificaciones', [
    'uses' => 'PlanificacionesController@listaDePlanificaciones',
  ])->name('listaDePlanificaciones');


  Route::get('/fichaDePlanificacion/{id}', [
    'uses' => 'PlanificacionesController@fichaDePlanificacion',
  ])->name('fichaDePlanificacion');

    Route::group(['prefix'=>'Pacientes'],function () {

      Route::view('/crearPlanificacion/{id}', 'DR.PLANIFICACIONES.PACIENTES.crearPlanificacion')->name('crearPlanificacion');
      Route::view('/ingresoDePaciente', 'DR.PLANIFICACIONES.PACIENTES.ingresoDePaciente')->name('ingresoDePaciente');
      Route::view('/indexPacientes', 'DR.PLANIFICACIONES.PACIENTES.indexPacientes')->name('indexPacientes');

      Route::get('/listadoDePacientes', [
        'uses' => 'PlanificacionesController@listadoDePacientes',
      ])->name('listadoDePacientes');

      Route::get('/fichaPaciente/{id}', [
        'uses' => 'PlanificacionesController@fichaPaciente',
      ])->name('fichaDePaciente');

      Route::post('/registrarPaciente',[
      'uses' => 'PlanificacionesController@registrarPaciente',
      ])->name('registrarPaciente');

      Route::get('/eliminarPaciente/{id}',[
      'uses' => 'PlanificacionesController@eliminarPaciente',
      ])->name('eliminarPaciente');

      Route::post('/subirDicom', [
        'uses' => 'PlanificacionesController@subirDicom',
        'as' => 'subirDicom',
      ]);

      Route::post('/subirStl', [
        'uses' => 'PlanificacionesController@subirStl',
        'as' => 'subirStl',
      ]);

      Route::get('/formularioCreacionDePlanificacion/{id}', [
        'uses' => 'PlanificacionesController@formularioCreacionDePlanificacion',
      ])->name('formularioCreacionDePlanificacion');


      Route::post('/crearPlanificacion/{id}', [
        'uses' => 'PlanificacionesController@crearPlanificacion',
      ])->name('crearPlanificacion');


      Route::post('/AgregarDiente', [
        'uses' => 'PlanificacionesController@AgregarDiente',
      ])->name('AgregarDiente');

      Route::post('/eliminarDiente',[
      'uses' => 'PlanificacionesController@eliminarDiente',
      ])->name('eliminarDiente');



    });

});

Route::group(['prefix'=>'3DPrinting'],function () {

  Route::view('/crearSolicitudDeImpresion', 'DR.PRINTING.crearSolicitudDeImpresion')->name('crearSolicitudDeImpresion');
  Route::view('/fichaDeImpresion', 'DR.PRINTING.fichaImpresion')->name('fichaDeImpresion');
  Route::view('/listadoDeImpresiones', 'DR.PRINTING.listadoDeImpresiones')->name('listadoDeImpresiones');
  Route::view('/index3Dprinting', 'DR.PRINTING.index3Dprinting')->name('index3Dprinting');

});

Route::group(['prefix'=>'Perfil'], function(){


    Route::get('/MisDatos', [
      'uses' => 'Perfil@DatosPersonales',
    ])->name('DatosPersonales');

});
