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

Route::get('/.admin', function () {
    return view('layouts/admin');
});

Route::resource('/noticias/inicio','NoticiasController');
Route::resource('/noticias/popup','PopupController');
Route::resource('/background','BackgroundController');

Route::get('/', 'PaginaController@show');