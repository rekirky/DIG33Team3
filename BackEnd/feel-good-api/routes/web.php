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

//Accepted routes that return database information
$router->get('product-groups', 'ProductGroupController@index');
$router->get('product-group/{id}', 'ProductGroupController@show');
$router->get('events', 'EventController@index');
$router->get('event/{id}', 'EventController@show');
$router->get('products', 'ProductController@index');
$router->get('product/{id}', 'ProductController@show');
$router->post('enquiry', 'EnquiryController@store');
