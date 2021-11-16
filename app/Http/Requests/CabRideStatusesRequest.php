<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CabRideStatusesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cab_ride_id' => 'required',
            'status_id' => 'required',
            'status_time' => 'required'
        ];
    }
}
