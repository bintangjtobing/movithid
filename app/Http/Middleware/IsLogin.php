<?php

namespace App\Http\Middleware;

use Closure;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(($request->session()->get('isLogin') != 'login')) {
            return redirect('/sign-in');
        }

        return $next($request);
    }
}
