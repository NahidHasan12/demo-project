<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\role;
use App\Models\User;
use App\Models\permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            $all_permissions = permission::all();
            foreach($all_permissions as $key => $permission){
                Gate::define($permission->slug, function(User $user) use ($permission) {
                    return $user->haspermission($permission->slug);
                });
            }
        }
        return $next($request);
    }
}
