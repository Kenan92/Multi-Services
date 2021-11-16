<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_model extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_name',
        'model_descritpion'
    ];

    public function cab()
    {
        return $this->hasMany(Cab::class, 'car_model_id');
    }
}
