<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $country = [
            'us',
            'uk',
            'ke',
            'ug'
        ];
        if(!in_array($request->country, $country) && !request()->is('unavailable')){
            return redirect()->route('unavailable');
        }
        return $next($request);
    }
}
