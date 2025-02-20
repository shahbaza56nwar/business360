<?php

namespace App\Http\Middleware;
use App\Http\Traits\CommonData;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserActivity
{
    use CommonData;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {
        $this->userActivityLog($permission);
        return $next($request);
    }
}
