<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'rut' => 'required|min:9',
            'razonSocial' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required',
            'comuna' => 'required',
            'contacto' => 'required',
            'email' => 'required|email',
            'celular' => 'required',
        ];
    }
}
