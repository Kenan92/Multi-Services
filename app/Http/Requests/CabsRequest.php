<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CabsRequest extends FormRequest
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
            'license_plate' => 'required|unique:App\Models\Cab|size:6',
            'car_model_id' => 'required',
            'manufacture_year' => 'required',
            'owner_id' => 'required',
        ];
    }
}
