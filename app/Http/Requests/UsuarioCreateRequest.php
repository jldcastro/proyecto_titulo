<?php

namespace Calibracion\Http\Requests;

use Calibracion\Http\Requests\Request;

class UsuarioCreateRequest extends Request
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
            'codigo_usuario' => 'required|numeric',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'rut_usuario' => 'required|cl_rut|unique:users',
            'tipo_usuario' => 'required'
        ];
    }
}
