<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class role
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
        if(auth()->user()->sysRole == 'เจ้าหน้าที่พัสดุคณะ'){
            return $next($request);
        }
  
        return redirect('index')->with('error',"You don't have admin access.");
    }
}
