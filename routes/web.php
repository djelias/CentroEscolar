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

Route::get('/Laferre', function () {
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

 


	Route::resource('usuarios','UserController');
	
});

 Route::resource('tableCliente','TableClienteController');
 Route::resource('tableProductos','TableProductosController');
 Route::resource('tableVentas','TableVentasController');
 Route::resource('tableCompras','TableComprasController');



