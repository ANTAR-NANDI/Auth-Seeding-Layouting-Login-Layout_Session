<?php

namespace App\Http\Middleware;

use Closure;

class IsStudent
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
        if($request->session()->get('userrole')!='student'){ // if userid is not set in session
            return redirect()->to('login');
           
        }
        else if($request->session()->get('userrole')=='student'){ // if userid is not set in session
            return redirect()->to('login');
           
        }
        else
        
        return $next($request);
    }
}
