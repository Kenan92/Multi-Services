<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_rides', function (Blueprint $table) {
            $table->id();
            $table->integer('shift_id')->nullable();
            $table->timestamp('ride_start_time')->nullable();
            $table->timestamp('ride_end_time')->nullable();
            $table->text('address_starting_point')->nullable();
            $table->text('GPS_starting_point')->nullable();
            $table->text('address_destination')->nullable();
            $table->text('GPS_destination')->nullable();
            $table->boolean('canceled');
            $table->integer('payment_type_id')->nullable();
            $table->decimal('price', 10, 2)->nullable();
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
        Schema::dropIfExists('cab_rides');
    }
}
