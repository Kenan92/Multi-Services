<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CabRidesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'CabRides',
            'atributes' => [
                'shift_id' => $this->shift_id,
                'ride_start_time' => $this->ride_start_time,
                'ride_end_time' => $this->ride_end_time,
                'address_starting_point' => $this->address_starting_point,
                'GPS_starting_point' => $this->GPS_starting_point,
                'address_destination' => $this->address_destination,
                'GPS_destination' => $this->GPS_destination,
                'canceled' => $this->canceled,
                'payment_type_id' => $this->payment_type_id,
                'price' => $this->price,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
        ];
    }
}
