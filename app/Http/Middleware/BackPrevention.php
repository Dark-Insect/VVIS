<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BackPrevention
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        return $response->header('Cache-Control','nocache,no-store,max-age=0,must-revalidate,no-previous')
                        ->header('Pragma','no-cache')
                        ->header('Expires', 'Mon, 01 Jan 1970 00:00:00 GMT');
    }   
}
