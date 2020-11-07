<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\UserStatus;

class VerificationMiddlware
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
        if (!$us->email_verification_status === true || !$us->instagram_verification_status === true) {
            return Redirect()->route('user.profileVerification');
        }
        return $next($request);
    }
}
