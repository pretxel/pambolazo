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

Route::get('partidos','HomeController@showWelcome');

Route::get('enviaCorreo','MailController@mandarEmails');

Route::post('sendRecuperacion', 'TokenController@sendEmail');

Route::get('token/reset/{token?}', 'TokenController@index');
Route::post('token/update', 'TokenController@updateToken');

// Route::get('generar/{idPronos?}','HomeController@generarPdf');

// Route::get('generarEstadisticas','EstadisticasController@generaEstadisticas');

// Route::get('descargar', function()
// {
//     $html = '<html><body>';
//     $html.= '<p style="color:red">Generando un sencillo pdf ';
//     $html.= 'de forma realmente sencilla.</p>';
//     $html.= '</body></html>';
//     return PDF::load($html, 'A4', 'portrait')->download('nombreArchivoPdf');
// });

// Route::get('gracias/{token?}','HomeController@gracias');