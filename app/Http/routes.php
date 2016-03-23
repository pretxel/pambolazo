<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="api.host.com",
 *     basePath="/",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Pambolazo API",
 *         description="",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="pretxel100@gmail.com"
 *         ),
 *         @SWG\License(
 *             name="MIT"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Find out more about my website",
 *         url="http://www.example.com"
 *     )
 * )
 */


Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');



});

Route::group(['prefix' => 'api/v1'], function () {
  Route::resource('team', 'TeamController');
});
