<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsModelRequest extends FormRequest
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
            'model_name' => 'required|max:100',
            'model_descritpion' => 'required|max:200'
        ];
    }
}
