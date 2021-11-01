<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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
        $response = $next($request);
        
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Methods', '*');
        $response->header('Access-Control-Allow-Headers', 'X-Requested-With,Content-Type,X-Auth-Token,Origin,Authorization,Accept');
        //Access-Control-Allow-Credentials true or false
        return $response;
    }
}
