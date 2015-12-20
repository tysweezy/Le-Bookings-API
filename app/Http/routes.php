<?php

use Carbon\Carbon;

$app->get('/', function () use ($app) {

  return 'welcome to the bookings api';   
 
    /* $date = Carbon::now('America/Los_Angeles');

    return $date; */
});



// api group
$app->group(['prefix' => 'api'], function($app) {

  // category > booking. Each Booking will be cateorized in a Category
    // a category is a way to group bookings... i.e. appointments, meetings, etc. 
    // category/create -- POST -- Create a Category
    // cateories       -- GET  -- All Categories
    // category/{id}   -- GET --  Get specific category


  $app->get('categories', 'App\Http\Controllers\BookingsController@categories');

  $app->get('bookings', 'App\Http\Controllers\BookingsController@all');

  $app->get('booking/{id}', 'App\Http\Controllers\BookingsController@showBooking');

  $app->get('category/{id}', 'App\Http\Controllers\BookingsController@showCategory');

  $app->post('category/create', 'App\Http\Controllers\BookingsController@storeCategory'); 
 
  $app->post('category/{id}/booking/create', 'App\Http\Controllers\BookingsController@storeBooking');
});