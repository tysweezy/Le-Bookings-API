<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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


  /**
   * store category
   * 
   * @return response
   */
  public function storeCategory(Request $request)
  {
    $category = Category::create($request->all());

    return response()->json($category);
  }

  /**
   * Store the booking 
   *
   * @return response
   */
  public function store()
  {
    // store booking
  }
  
}