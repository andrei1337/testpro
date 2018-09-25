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

Route::get('/', 'PagesController@index');

Route::get('/teams', 'TeamsController@index');
Route::get('/teams/create', 'TeamsController@create');
Route::get('/teams/update', 'TeamsController@update');

Route::get('/players', 'PlayersController@index');
Route::get('/players/create', 'PlayersController@create');
Route::get('/players/update', 'PlayersController@update');
