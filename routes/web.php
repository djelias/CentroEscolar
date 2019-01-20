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

Route::get('/SGECECST', function () {
    return view('welcome');
});


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

	Auth::routes();
	Route::group(['middleware' => 'auth'], function() {
    Route::get('gestion', function()
	{
   return view('gestion');
	});
 });	


Route::group(['middleware' => 'admin'], function() {
   	Route::resource('docentes','DocentesController');
   	Route::get('docentes/alta/{id}', [
      'uses'=> 'DocentesController@alta',
      'as'  => 'docentes.alta'
  ]);

	Route::resource('grados','GradosController');
	Route::resource('asignaciones','AsignacionesController');
	Route::resource('usuarios','UserController');
	
});
Route::group(['middleware' => 'auth'], function() {
	Route::resource('alumnos','AlumnosController');
	Route::get('alumnos/index2', [
      'uses'=> 'AlumnosController@index2',
      'as'  => 'alumnos.index2'
  ]);

	Route::resource('materias','MateriasController');
	Route::resource('examenes','ExamenesController');
	Route::get('examenes/modificar/{id}', [
      'uses'=> 'ExamenesController@modificar',
      'as'  => 'examenes.modificar'
  ]);
	Route::get('examenes/detalle/{idgrado}/{idalumno}/{trim}', [
      'uses'=> 'ExamenesController@detalle',
      'as'  => 'examenes.detalle'
  ]);
  Route::get('examenes/promedioFinal/{idgrado}/{idalumno}', [
      'uses'=> 'ExamenesController@promedioFinal',
      'as'  => 'examenes.promedioFinal'
  ]);
	Route::get('examenes/materias/{id}', [
      'uses'=> 'ExamenesController@materias',
      'as'  => 'examenes.materias'
  ]);
  Route::get('examenes/listado/{id}', [
      'uses'=> 'ExamenesController@listado',
      'as'  => 'examenes.listado'
  ]);
	Route::resource('asignacionAlumnosGrados','AsignacionAlumnosGradosController');
	Route::resource('asignacionMateriasGrados','AsignacionMateriasGradosController');
	Route::resource('eventos','EventosController');
	Route::resource('asistencias','AsistenciasController');
	Route::get('asistencias/modificar/{id}', [
      'uses'=> 'AsistenciasController@modificar',
      'as'  => 'asistencias.modificar'
  ]);
	Route::get('asistencias/detalle/{id}', [
      'uses'=> 'AsistenciasController@detalle',
      'as'  => 'asistencias.detalle'
  ]);

  Route::resource('reportes','ReportesController');
	Route::resource('promedios','PromediosController');

});



