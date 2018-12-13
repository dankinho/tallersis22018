<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MascotaRequest extends FormRequest
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
            'nombre_mascota' => 'required|string|min:5|max:45',
             'fecha_nacimiento'=> 'required|date_format:"YYYY-MM-DD "',
            'genero' => 'required',
            'cat_raza' => 'required',
            'cat_tamano'=> 'required',
             'observaciones' => 'required|string|min:5|max:300',
        ];
    }
    public function messages()
    {
        return [
            'nombre_mascota.required' => 'El campo del nombre es obligatorio',
            'fecha_nacimiento.required' => 'El campo de la fecha es obligatorio',
            'genero.required' => 'Seleccionar genero es obligatorio',
            'cat_raza.required' => 'El campo de raza es obligatorio',
            'cat_tamano.required' => 'El campo de tamano de identificacion es obligatorio',
            'observaciones.required' => 'El campo de observaciones es obligatorio',
        ];
    }
}
