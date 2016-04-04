<?php
Route::get('/matches', 'ComponentsUI\MatchController@matches');
Route::get('/match/{id?}', 'ComponentsUI\MatchController@match');
Route::post('/match', 'ComponentsUI\MatchController@save_match');
Route::post('/matchUpt/{id?}', 'ComponentsUI\MatchController@update_match');
Route::delete('/match/{id?}', 'ComponentsUI\MatchController@deleteMatch');
