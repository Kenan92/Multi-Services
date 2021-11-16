<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CabsResource extends JsonResource
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
            'type' => 'Cabs',
            'atributes' => [
                'license_plate' => $this->license_plate,
                'car_model_id' => $this->car_model_id,
                'manufacture_year' => $this->manufacture_year,
                'owner_id' => $this->owner_id,
                'active' => $this->active,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
        ];
    }
}
