<?php

namespace App\Http\Middleware;

use Closure;

class checkUserSession
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
        if (!$request->session()->exists('user')) {
            return redirect('/login')->with('error','Maaf anda belum login!');
        }
        return $next($request);
    }
}
