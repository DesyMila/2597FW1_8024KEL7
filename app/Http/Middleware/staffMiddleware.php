<?php

namespace App\Http\Middleware;

use Closure;

class staffMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
       private $auth;
    public function __construct()
    {
        $this->auth = app('auth');
    }
  
    public function handle($request, Closure $next)
    {
        if($this->auth->check()&& $request->user()->level=='staff'){
            return $next($request);
        }
        return redirect('login')->withErrors('Silahkan Login Terlebih Dahulu');

    }
}
