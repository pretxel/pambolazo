<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/','HomeController@showWelcome');

Route::get('/','HomeController@showPronosticos');

Route::post('pronosticos/guarda','HomeController@savePronosticos');

Route::post('valida','HomeController@validarEmail');

Route::post('validaToken','HomeController@validaToken');

// Route::get('gracias/{token?}','HomeController@gracias');