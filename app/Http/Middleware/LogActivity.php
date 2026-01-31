<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\AccessLog;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        try {
            AccessLog::create([
                'ip_address' => $request->ip(),
                'route' => $request->path(),
                'method' => $request->method(),
                'user_agent' => $request->userAgent(),
                'user_id' => Auth::id(),
            ]);
        } catch (\Exception $e) {
            // Silently fail to avoid breaking the app if logging fails
        }

        return $response;
    }
}
