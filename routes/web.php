<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/nosotros', 'InicioController@nosotros')->name('nosotros');

Route::get('/servicios', 'InicioController@servicios')->name('servicios');

Route::get('/preguntas', 'InicioController@preguntas')->name('preguntas');

Route::get('/contactos', 'InicioController@contactos')->name('contactos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
