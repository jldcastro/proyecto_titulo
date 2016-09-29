<?php

namespace Calibracion\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Illuminate\Support\Facades\Session;

class Administrador
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->tipo_usuario != 'administrador')
        {
            Session::flash('mensaje-errores','Sin permisos de acceso');
            return redirect()->to('administrador');
        }
        return $next($request);
    }
}
