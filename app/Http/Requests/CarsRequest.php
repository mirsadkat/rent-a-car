<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
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
            'marka' => 'required',
            'model' => 'required',
            'godiste' => 'required',
            'tip' => 'required',
            'gorivo' => 'required',
            'kubikaza' => 'required',
            'slika' => 'required'
        ];
    }
}
