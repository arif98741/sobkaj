<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotJobprovider
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'jobprovider')
	{
	    if (!Auth::guard($guard)->check()) {
	        return redirect('jobprovider/login');
	    }

	    return $next($request);
	}
}