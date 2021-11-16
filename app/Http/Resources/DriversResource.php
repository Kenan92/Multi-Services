<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DriversResource extends JsonResource
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
            'type' => 'Drivers',
            'atributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'birth_date' => $this->birth_date,
                'driving_licence_number' => $this->driving_licence_number,
                'expiry_date' => $this->expiry_date,
                'working' => $this->working,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'cabs' => $this->cab
            ]
        ];
    }
}
