<?php

namespace Calibracion;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = ['equipo', 'marca_modelo', 'nserie','cod_interno','capacidad','clase_oiml','error_max','lugar_almacenamiento','fcompra'];

    public function scopeSearch($query, $equipo)
    {
        return $query->where('equipo','LIKE',"%$equipo%");
    }

}
