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
  Route::view('/listaDePlanificaciones', 'DR.PLANIFICACIONES.listaDePlanificaciones')->name('listaDePlanificaciones');
  Route::view('/fichaDePlanificacion', 'DR.PLANIFICACIONES.fichaDePlanificacion')->name('fichaDePlanificacion');
  

    Route::group(['prefix'=>'Pacientes'],function () {

      Route::view('/crearPlanificacion', 'DR.PLANIFICACIONES.PACIENTES.crearPlanificacion')->name('crearPlanificacion');
      Route::view('/ficha', 'DR.PLANIFICACIONES.PACIENTES.fichaPaciente')->name('fichaDePaciente');
      Route::view('/ingresoDePaciente', 'DR.PLANIFICACIONES.PACIENTES.ingresoDePaciente')->name('ingresoDePaciente');
      Route::view('/listadoDePacientes', 'DR.PLANIFICACIONES.PACIENTES.listadoDePacientes')->name('listadoDePacientes');
      Route::view('/indexPacientes', 'DR.PLANIFICACIONES.PACIENTES.indexPacientes')->name('indexPacientes');

      Route::post('/registrarPaciente',[
      'uses' => 'Planificaciones@registrarPaciente',
      ])->name('registrarPaciente');

    });

});

Route::group(['prefix'=>'3DPrinting'],function () {

  Route::view('/crearSolicitudDeImpresion', 'DR.PRINTING.crearSolicitudDeImpresion')->name('crearSolicitudDeImpresion');
  Route::view('/fichaDeImpresion', 'DR.PRINTING.fichaImpresion')->name('fichaDeImpresion');
  Route::view('/listadoDeImpresiones', 'DR.PRINTING.listadoDeImpresiones')->name('listadoDeImpresiones');
  Route::view('/index3Dprinting', 'DR.PRINTING.index3Dprinting')->name('index3Dprinting');

});
