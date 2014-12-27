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

Route::get('/','HomeController@coomingsoon');
Route::get('/welcome','HomeController@newVersion');


//Route::get('/','HomeController@index');



//Route::get('/','DashboardController@index');


Route::post('/signup','LoginController@signup');

Route::post('/login' , 'LoginController@signin');

Route::post('/recuperaPass', 'TokenController@sendEmail');

Route::get('/logout' , 'LoginController@logout');

Route::post('/perfil','ProfileController@edit');

Route::get('/ligaPambo/{name}', 'LigaPamboController@valida');

Route::post('/ligaPambo', 'LigaPamboController@agrega');


Route::group(array('before'=>'userauth'),function(){

	Route::get('/dashborad','DashboardController@index');
	Route::get('/nuevaLiga','DashboardController@nuevaLiga');
	Route::get('/perfil','DashboardController@perfil');
	Route::post('/updateTuto','HomeController@desactiveTuto');
});

/* Version Vieja Pambolazo


// Route::get('/','HomeController@showEliminatorias');

Route::get('faseGrupos','HomeController@showPronosticos');

Route::get('eliminatorias/{fase?}','HomeController@showEliminatorias');

Route::post('pronosticos/guarda','HomeController@savePronosticos');

Route::get('refreshScore', 'HomeController@refreshScore');

Route::post('valida','HomeController@validarEmail');

Route::post('validaToken','HomeController@validaToken');

Route::get('partidos','HomeController@showWelcome');

Route::get('eliminatorias','HomeController@showEliminatorias');	

Route::get('enviaCorreo','MailController@mandarEmails');

Route::post('sendRecuperacion', 'TokenController@sendEmail');

Route::get('token/reset/{token?}', 'TokenController@index');
Route::post('token/update', 'TokenController@updateToken');

Route::post('ranking', 'HomeController@showRanking');

Route::get('deals','HomeController@deals');

Route::post('sendEliminatorias', 'EliminatoriasController@sendEliminatoria');
Route::post('getEliminatorias', 'EliminatoriasController@getEliminatoria');



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

*/