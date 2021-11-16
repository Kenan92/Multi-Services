<?php

namespace App\Models;

use App\Models\Cab_ride_status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cab_ride extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift_id',
        'ride_start_time',
        'ride_end_time',
        'address_starting_point',
        'GPS_starting_point',
        'address_destination',
        'GPS_destination',
        'canceled',
        'payment_type_id',
        'price',
    ];

    public function cab_ride_status()
    {
        return $this->hasMany(Cab_ride_status::class, 'cab_ride_id');
    }
}
