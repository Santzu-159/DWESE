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
    return view('index');
});

//Cargamos las resources
Route::get('alumnos/{alumno}/fmatricula','AlumnoController@fmatricula')->name('alumnos.fmartricula');
Route::resource('alumnos','AlumnoController');
Route::resource('modulos','ModuloController');


