<?php

namespace App\Models;

use App\Models\Cab_ride;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name'
    ];

    public function cab_ride()
    {
        return $this->hasMany(Cab_ride::class, 'payment_type_id');
    }
}
