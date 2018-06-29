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
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
 Route::get('gestion', function()
	{
    return view('gestion');
	});
	Auth::routes();
	Auth::routes();

Route::group(['middleware' => 'auth'], function() {
   	Route::resource('docentes','DocentesController'); 
	Route::resource('grados','GradosController');
});
=======

Route::resource('docentes','DocentesController'); 
Route::resource('grados','GradosController');
Route::resource('alumnos','AlumnosController');
Route::resource('secretarias','SecretariasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> b783b869fc0bf2f240e633651a1e0d86131b370f
