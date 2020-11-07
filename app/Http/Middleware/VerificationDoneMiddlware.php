<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserStatus;

class VerificationDoneMiddlware
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
        $id = $request->user()->id;
        $us = UserStatus::where('user_id', $id)->first();
        if (!$us->email_verification_status === false || !$us->instagram_verification_status === false) {
            return Redirect()->route('user.profile');
        }
        return $next($request);
    }
}
