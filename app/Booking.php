<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {

  protected $table = 'bookings';

  protected $fillable = ['appointment_name', 'appointment_description'];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }
}