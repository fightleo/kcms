<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateAdmin
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
      // $res =   $request->path();
   
         if(!$request->session()->has('useritems.pwd')) {

            return redirect('admin/login');
 
        } 

         return $next($request);
      
  
    }
}
