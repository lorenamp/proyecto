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

Route::get('inscripcion', 'InscriptionController@index')->name('inscripcion');
Route::post('inscripcion', 'InscriptionController@create')->name('inscripcion');
Route::get('contacto','ContactsController@index')->name('contacto');
Route::post('contacto', 'ContactsController@create')->name('contacto');
Route::get('promociones', function (){return view('layout.prom');})->name('promociones');



Route::get('roles','RolController@index')->name('roles');
Route::post('roles', 'RolController@create')->name('roles');

Route::resource('rol', 'RolerController');
Route::resource('permiso', 'PermisorController');

