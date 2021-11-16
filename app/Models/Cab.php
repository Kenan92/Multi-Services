<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cab extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'car_model_id',
        'manufacture_year',
        'owner_id',
        'active',
    ];

    public function shift()
    {
        return $this->hasMany(Shift::class, 'cab_id');
    }
}
