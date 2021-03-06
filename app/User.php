<?php

namespace Calibracion;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','codigo_usuario','apellido_paterno','apellido_materno','rut_usuario','foto','perfil_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function perfil()
    {
        return $this->belongsTo('Calibracion\Perfil');
    }

    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public function setFotoAttribute($foto)
    {
        if(!empty($foto))
        {
            $this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
            $name = Carbon::now()->second.$foto->getClientOriginalName();
            Storage::disk('local')->put($name, \File::get($foto));
        }

    }

    public function scopeSearch($query, $codigo_usuario)
    {
        return $query->where('codigo_usuario','LIKE',"%$codigo_usuario%");
    }
}
