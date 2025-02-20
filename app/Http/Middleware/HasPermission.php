<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\User;
use App\Http\Traits\CommonData;

class HasPermission
{
    use CommonData;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, $pmid)
    {

        if ($this->userCan($pmid)) {
            return $next($request);
        } else {
            return redirect()->back()->with(["alert" => ['type' => 'info']]);
        }
    }
}
