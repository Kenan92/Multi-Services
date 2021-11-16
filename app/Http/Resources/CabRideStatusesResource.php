<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CabRideStatusesResource extends JsonResource
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
            'type' => 'CabRideStatuses',
            'atributes' => [
                'cab_ride_id' => $this->cab_ride_id,
                'status_id' => $this->status_id,
                'status_time' => $this->status_time,
                'cc_agent_id' => $this->cc_agent_id,
                'shift_id' => $this->shift_id,
                'status_details' => $this->status_details,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
