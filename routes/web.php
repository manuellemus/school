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



Route::get('/', 'AlumnoController@info')->name('alumno.info');

Route::resource('alumno', 'AlumnoController')->except('show');
Route::resource('materia', 'MateriaController')->except('show');
Route::resource('grado', 'GradoController')->except('show');
Route::resource('materia-por-grado', 'MateriaPorGradoController')->except('show');

