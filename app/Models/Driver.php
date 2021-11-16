<?php

namespace App\Models;

use App\Models\Cab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'driving_licence_number',
        'expiry_date',
        'working',
    ];

    public function cab()
    {
        return $this->hasMany(Cab::class, 'owner_id');
    }

    public function shift()
    {
        return $this->hasMany(Shift::class, 'driver_id');
    }
}
