<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentariosRequest extends FormRequest
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
                'comentario' => 'required|string|min:5|max:100',
                'calificacion' => 'required|numeric|digits_between: 1,5|min:1|max:5'


        ];
    }
    public function messages()
    {
        return [
            'comentario.required' => 'El campo comentario es obligatorio',
            'calificacion.required' => 'El campo calificacion es obligatorio',
        ];
    }
}
