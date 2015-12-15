<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @todo add in user_id field and FK constraint.
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appointment_name');
            $table->text('appointment_description');
            $table->timestamp('time_booked');
            // add in category_id --> booking category.
            $table->integer('category_id')->unsigned();
            $table->timestamps(); 
            $table->foreign('category_id')
                  ->references('id')
                  ->on('category')
                  ->onDelete('cascade');
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
