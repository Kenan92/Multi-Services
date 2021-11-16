<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabRideStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_ride_statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('cab_ride_id');
            $table->integer('status_id');
            $table->timestamp('status_time');
            $table->integer('cc_agent_id')->nullable();
            $table->integer('shift_id')->nullable();
            $table->text('status_details')->nullable();
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
        Schema::dropIfExists('cab_ride_statuses');
    }
}
