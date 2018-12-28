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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/hola', function () {
    return view('page1');
});

Route::get('/','PageController@inicio');

Route::get('/login','PageController@login');

Route::get('/miscursos','PageController@miscursos');

Route::get('/detallecurso','PageController@detallecurso');

Route::get('/misnotas','PageController@misnotas');

Route::get('/misdatos','PageController@misdatos');

Route::get('/cursos','PageController@cursos');

Route::get('/testimonio','PageController@testimonio');

Route::get('/pasos','PageController@pasos');
