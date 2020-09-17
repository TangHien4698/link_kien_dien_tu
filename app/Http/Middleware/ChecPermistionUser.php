<?php

namespace App\Http\Middleware;

use Closure;

class ChecPermistionUser
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
        if (isUser()) {
            return $next($request);
        } else {
//            Auth::logout();
            return redirect()->route('user.login');
        }
    }
}
