<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\UserRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        $user_role = UserRole::where('user_id', Auth::user()->id)->get()->first();
        //dd($user_role->role_id);
        //dd(Auth::user()->roles()->where('user_id', Auth::user()->id));
        $role = Role::where('id', $user_role->role_id)->get()->first();
        $role_name = lcfirst($role->name);
        if ($role){
            $route = $role_name.".index";
            return view($route);
        }
        //dd($role_name);
        return $next($request);
    }
}
