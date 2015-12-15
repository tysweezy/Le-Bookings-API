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
   * Retrieve all categories
   * 
   * @return response
   */
  public function categories()
  {
    $categories = Category::all();

    return response()->json($categories);
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