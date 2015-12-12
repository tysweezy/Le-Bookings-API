<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @todo add in category_id field and FK constraint.
     * @todo add in user_id field and FK constraint.
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appointment_name');
            $table->text('appointment_description');
            $table->dateTime('time_booked');
            // add in category_id --> booking category.
            // add in user_id --> referencing user.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
