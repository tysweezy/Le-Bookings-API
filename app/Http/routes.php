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


use Carbon\Carbon;

$app->get('/', function () use ($app) {

  return 'welcome to the bookings api';   
 
    /* $date = Carbon::now('America/Los_Angeles');

    return $date; */
});


// api group
$app->group(['prefix' => 'api'], function($app) {
  $app->get('bookings', 'App\Http\Controllers\BookingsController@all');

  $app->post('booking/create', 'App\Http\Controllers\BookingsController@store');
});