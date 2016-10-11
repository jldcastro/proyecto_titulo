<?php

namespace Calibracion\Http\Requests;

use Calibracion\Http\Requests\Request;

class UsuarioUpdateRequest extends Request
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
            'codigo_usuario' => 'required',
            'name' => 'required',
            'email' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'rut_usuario' => 'required|cl_rut',
            'tipo_usuario' => 'required'
        ];
    }
}
