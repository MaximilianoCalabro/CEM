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
    return view('auth/login');
});

Route::resource('/noticias/inicio','NoticiasController');
Route::resource('/noticias/slider','SliderController');
Route::resource('/background','BackgroundController');

Route::get('/', 'PaginaController@show');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/layouts/admin', 'AdminController@index');
