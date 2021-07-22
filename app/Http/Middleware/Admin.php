<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Redirect;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $isAuth = Auth::check();

        $hasAccesseToAdminPanel = Gate::check('accesse-to-admin-panel');

        if ( !$hasAccesseToAdminPanel ) {
            Auth::logout();

            return redirect()->route('login')->withErrors(['access' => 'Вам отказано в доступе!']);
        }

        return $next($request);
    }
    
}
