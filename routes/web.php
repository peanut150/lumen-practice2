<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/users', 'UserController@index'); // get all users records
$router->post('/addUsers', 'UserController@add'); // create new user record
$router->get('/showUser/{id}', 'UserController@show'); // get user by id
$router->put('/updateUser/{id}', 'UserController@update'); // update user record
$router->patch('/updateUser1/{id}', 'UserController@update'); // update user record
$router->delete('/deleteUsers/{id}', 'UserController@delete'); // delete record

$router->get('/', function () use ($router) {
    return $router->app->version();
});
