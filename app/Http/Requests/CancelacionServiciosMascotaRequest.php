<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CancelacionServiciosMascotaRequest extends FormRequest
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
            'comentario' => 'required|string|min:5',
        ];
    }
    public function messages()
    {
        return [
            'comentario.required' => 'El campo de la cancelacion es obligatorio'
        ];
    }
}
