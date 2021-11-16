<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShiftsResource extends JsonResource
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
            'type' => 'shifts',
            'atributes' => [
                'driver_id' => $this->driver_id,
                'cab_id' => $this->cab_id,
                'shift_start_time' => $this->shift_start_time,
                'shift_end_time' => $this->shift_end_time,
                'login_time' => $this->login_time,
                'logout_time' => $this->logout_time,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
        ];
    }
}
