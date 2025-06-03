<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SessionMiddleware
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
        // Example: Log session id for demonstration
        $sessionId = $request->session()->getId();
        Log::info('SessionMiddleware: Current session ID: ' . $sessionId);

        // You can add other session-related logic here

        return $next($request);
    }
}
