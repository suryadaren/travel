<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class isOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard('owner')->check()) {
            
            $notif = [
                'message' => 'akses terbatas, anda harus login',
                'alert-type' => 'error'
            ];

            return redirect(url('/login'))->with($notif);
        }

        return $next($request);
    }
}
