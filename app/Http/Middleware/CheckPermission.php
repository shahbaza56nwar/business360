<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {
        //return $next($request);

        if (!session()->has('user_permissions')) {
            return redirect()->route('login');
        }

        if (!in_array($permission, session('user_permissions'))) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
