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

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::post('/home/eliminar/{id}', 'HomeController@destroy');
Route::post('/home/asignar', 'HomeController@create');

Route::get('inscripcion', 'InscriptionController@index')->name('inscripcion');
Route::post('inscripcion', 'InscriptionController@create')->name('inscripcion');
Route::get('contacto','ContactsController@index')->name('contacto');
Route::post('contacto', 'ContactsController@create')->name('contacto');
Route::view('promociones', 'layout.prom')->name('promociones');


Route::resource('rol', 'RolerController');
Route::resource('permiso', 'PermisorController');

