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
Route::get('hola',function(){
	return "Hola desde routes";
});

Route::get('nombre/{nombre?}',function($nombre="martina"){
	return "Mi nombre es ".$nombre;
});



Route::get('prueba','PruebaControllers@index');
Route::get('/','FontController@index');
Route::get('contacto','FontController@contacto');
Route::get('review','FontController@review');
Route::get('administrador','FontController@administrador');
Route::resource('/genero','GeneroController');