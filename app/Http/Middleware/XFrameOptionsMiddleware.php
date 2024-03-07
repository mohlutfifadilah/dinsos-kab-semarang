<?php

namespace App\Http\Middleware;

use Closure;

class XFrameOptionsMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Menambahkan header X-Frame-Options: SAMEORIGIN
        $response->header('X-Frame-Options', 'SAMEORIGIN');

        return $response;
    }
}
