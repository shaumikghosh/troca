<?php

namespace App\Http\Middleware;

use Closure;

class RemembermeMiddlware
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
        $remember_me = $request->cookie('remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d')? true:false;

        if( $remember_me === true ){
            return Redirect()->route('user.profile');
        }
        return $next($request);
    }
}
