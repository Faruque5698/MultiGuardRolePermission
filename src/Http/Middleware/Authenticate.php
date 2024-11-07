<?php

namespace FaruqueAshad\MultiGuardRolePermission\Http\Middleware;

use Closure;
use FaruqueAshad\MultiGuardRolePermission\Models\AuthGuard;

class Authenticate
{
    public function handle($request, Closure $next, $guard)
    {
        if (AuthGuard::where('name',$guard)->exists()){
            if (auth()->guard($guard)->check()) {
                return $next($request);
            }
            return sendError('Unauthenticated.', [], 401);
        }else{
            return sendError('Guard not defined.', [], 404);
        }
    }
}