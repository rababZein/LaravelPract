<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if($request->age > 10){
            echo 'this is middleware';
            //return redirect ('/login');
        }else  {
            echo 'age is '.$request->age .' and it is blow 10';
        }        
            
        return $next($request);
    }
}
