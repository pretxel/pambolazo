<?php
// Teams for routes
Route::get('/team/{id?}', 'ComponentsUI\TeamController@team');
Route::get('/teams', 'ComponentsUI\TeamController@teams');
Route::post('/team', 'ComponentsUI\TeamController@save_team');
Route::post('/teamUpt/{id?}', 'ComponentsUI\TeamController@update_team');
Route::delete('/team/{id?}', 'ComponentsUI\TeamController@deleteTeam');
