<?php

namespace App\Models;

use App\Models\Cab_ride;
use App\Models\Cab_ride_status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'cab_id',
        'shift_start_time',
        'shift_end_time',
        'login_time',
        'logout_time'
    ];

    public function cab_ride()
    {
        return $this->hasMany(Cab_ride::class, 'shift_id');
    }

    public function cab_ride_status()
    {
        return $this->hasMany(Cab_ride_status::class, 'shift_id');
    }
}
