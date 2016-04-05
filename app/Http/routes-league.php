<?php
Route::get('/leagues', 'ComponentsUI\LeagueController@leagues');
Route::get('/league/{id?}', 'ComponentsUI\LeagueController@league');
Route::post('/league', 'ComponentsUI\LeagueController@save_league');
Route::post('/leagueUpt/{id?}', 'ComponentsUI\LeagueController@update_league');
Route::delete('/league/{id?}', 'ComponentsUI\LeagueController@delete_league');
