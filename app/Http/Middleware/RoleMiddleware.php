<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = auth() -> user();
        $prefixes = User::getPrefixes();

        if ($prefixes[$user->role_id] == $prefixes[$role]){
            return $next($request);
        } else {
            abort(404);
        }



    }
}
