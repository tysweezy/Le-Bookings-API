<?php

namespace App\Http\Controllers;

class BookingsController extends Controller {

  /**
   * Grab all bookings
   *
   * @return response
   */
  public function all()
  {
    // data structure
    $bookings = ['some booking', 'another booking'];

    dd($bookings);


    // return json response
  }
}