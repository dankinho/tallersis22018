<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nombre_cliente' => 'required|string|min:5',
            'apellido_cliente' => 'required|string|min:5',
            'cat_id_tipo_identidad' => 'required',
            'num_doc_identidad' => 'required',
            'genero_cliente' => 'required',
            'direccion_casa' => 'required|string|min:5',
            'direccion_numero_casa' => 'required',
            'cat_macrodistrito' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nombre_cliente.required' => 'El campo del nombre es obligatorio',
            'apellido_cliente.required' => 'El campo del apellido es obligatorio',
            'cat_id_tipo_identidad.required' => 'Seleccionar tipo de identidad es obligatorio',
            'genero_cliente.required' => 'El campo de genero es obligatorio',
            'num_doc_identidad.required' => 'El campo de numero de identificacion es obligatorio',
            'direccion_casa.required' => 'El campo de direccion es obligatorio',
            'direccion_numero_casa.required' => 'El campo numero de casa es obligatorio',
            'cat_macrodistrito.required' => 'Seleccionar macrodistrito es obligatorio',
        ];
    }
}
