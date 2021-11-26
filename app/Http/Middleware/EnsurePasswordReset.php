<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsurePasswordReset
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
		if ($request->user()->force_password_reset == 1) {
			return redirect(route('user.change_password', ['user' => $request->user()]));
		}
        return $next($request);
    }
}
