<?php

namespace App\Models;

use App\Models\Cab_ride_status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cc_agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name'
    ];

    public function cab_ride_status()
    {
        return $this->hasMany(Cab_ride_status::class, 'cc_agent_id');
    }
}
