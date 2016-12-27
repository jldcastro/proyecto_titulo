<?php

namespace Calibracion;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = ['equipo', 'marca_modelo', 'nserie','cod_interno','capacidad','clase_oiml','error_max','lugar_almacenamiento','fcompra','norden_compra','proveedor','intervalo_mantenimiento','fecha_mantenimiento','avisar','pauta_mantencion','intervalo_calibracion','intervalo_verificacion','criterio_aceptacion','observaciones','actividad','f_realizacion','f_proxima','realizado_por','ncertificado','observacion','foto'];

    public function setFotoAttribute($foto)
    {
        if(!empty($foto))
        {
            $this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
            $name = Carbon::now()->second.$foto->getClientOriginalName();
            Storage::disk('local')->put($name, \File::get($foto));
        }

    }

    public function scopeSearch($query, $equipo)
    {
        return $query->where('equipo','LIKE',"%$equipo%");
    }

}
