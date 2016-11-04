<?php

namespace Calibracion\Http\Requests;

use Calibracion\Http\Requests\Request;

class PerfilCreateRequest extends Request
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
            'tipo_usuario' => 'required|unique:perfiles'
        ];
    }
}
