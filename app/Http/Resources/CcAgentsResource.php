<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CcAgentsResource extends JsonResource
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
            'type' => 'cc_agents',
            'atributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
        ];
    }
}
