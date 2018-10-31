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
route::resource('/vista1','VistaController');

Route::get('registro1', function () {
    return view('registro1');
});
Route::get('Listado', function () {
    return view('Listado');
});
Route::get('index', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
