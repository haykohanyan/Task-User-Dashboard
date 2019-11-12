<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
        if ($request->user()->admin!=1 )
        {
            return redirect('/accessDenied');
        }
      else  return $next($request);
    }
}
