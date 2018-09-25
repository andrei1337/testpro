<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/teams', 'TeamsController@showAllTeams');
$router->get('/teams/{id}', 'TeamsController@showTeam');
$router->post('/teams/create', 'TeamsController@createTeam');
$router->put('/teams/update/{id}', 'TeamsController@updateTeam');
$router->delete('/teams/delete/{id}', 'TeamsController@deleteTeam');

$router->get('/players', 'PlayersController@showAllPlayers');
$router->get('/players/{id}', 'PlayersController@showPlayer');
$router->post('/players/create', 'PlayersController@createPlayer');
$router->put('/players/update/{id}', 'PlayersController@updatePlayer');
$router->delete('/players/delete/{id}', 'PlayersController@deletePlayer');

