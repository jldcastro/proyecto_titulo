<?php

namespace Calibracion;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';

    protected $fillable = ['tipo_usuario'];

    public function user()
    {
        return $this->hasMany('Calibracion\User');
    }

}
