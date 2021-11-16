<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsModelResource extends JsonResource
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
            'type' => 'cars_model',
            'atributes' => [
                'model_name' => $this->model_name,
                'model_descritpion' => $this->model_descritpion,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
        ];
    }
}
