<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLogin
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
//        dd($this->checkInfoAdminLogin($request));
        if (!$this->checkInfoAdminLogin($request)){
            return redirect()->route('admin.login');
        }
        return $next($request);
    }

    private function checkInfoAdminLogin($request)
    {
        $sessionID = $request->session()->get('id');
        $sessionID = is_numeric($sessionID) && $sessionID > 0 ? true :false;
        return $sessionID;
    }

}
