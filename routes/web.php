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
Route::get('/hola', function () {
    return view('page1');
});
Route::get('/inicio','PageController@inicio')->name('inicio');

Route::get('/login','PageController@login')->name('login');

Route::get('/miscursos','PageController@miscursos')->name('miscursos');

Route::get('/detallecurso','PageController@detallecurso')->name('detallecurso');

Route::get('/misnotas','PageController@misnotas')->name('misnotas');

Route::get('/misdatos','PageController@misdatos')->name('misdatos');

Route::get('/cursos','PageController@cursos')->name('cursos');

Route::get('/testimonio','PageController@testimonio')->name('testimonio');

Route::get('/pasos','PageController@pasos')->name('pasos');

Route::get('/registrar','PageController@registrar')->name('registrar');
