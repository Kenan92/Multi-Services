<?php

namespace App\Models;

use App\Models\Cab_ride_status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_name'
    ];

    public function cab_ride_status()
    {
        return $this->hasMany(Cab_ride_status::class, 'status_id');
    }
}
