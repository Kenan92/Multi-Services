<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cab_ride_status extends Model
{
    use HasFactory;

    protected $fillable = [
        'cab_ride_id',
        'status_id',
        'status_time',
        'cc_agent_id',
        'shift_id',
        'status_details'
    ];
}
