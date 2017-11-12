<?php

namespace App\Http\Middleware;

use Closure;

class Terms
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
        $loggedUser = \Auth::user();
        if( $loggedUser->terms == 0 ){
            return redirect()->route('terms.index');
        }
        return $next($request);
    }
}
