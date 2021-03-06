<?php

namespace App\Http\Controllers;

use App\Category;
use App\Booking;
use Carbon\Carbon;
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
    
    $bookings = Booking::all();

    return response()->json($bookings);
  }


  /**
   * Show a particular booking
   * 
   * @return response
   */
  public function showBooking($booking_id)
  {
    $booking = Booking::with('category')->find($booking_id);

    return response()->json($booking); 
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
   * Show a specific category
   * 
   * @return response
   */
  public function showCategory(Request $request, $category_id)
  {
    $category = Category::with('bookings')->find($category_id);

    return response()->json($category);
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
  public function storeBooking(Request $request, $category_id)
  {
    $category = Category::find($category_id); 

    if (! $category) {
      dd('category does not exist');
    }

    $booking = new Booking;
    $booking->appointment_name           = $request->get('appointment_name');
    $booking->appointment_description    = $request->get('appointment_description');
    $booking->time_booked                = Carbon::now();
    $booking->category_id                = $category->id;

    $booking->save();
   
    return response()->json($booking);

  }
  
}