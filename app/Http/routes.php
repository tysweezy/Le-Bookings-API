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

$app->get('/', function () use ($app) {
    return 'welcome to the bookings api.';
});

// api group
$app->group(['prefix' => 'api'], function($app) {
  $app->get('bookings', 'App\Http\Controllers\BookingsController@all');
});