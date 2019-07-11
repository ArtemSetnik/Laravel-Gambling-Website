<?php

namespace App\Http\Middleware;

use App\Models\SystemConfig;
use Closure;

class DailiAuthMiddleware
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
        $sys = SystemConfig::findOrFail(1);
        if ($sys->down_name == 1)
        {
            echo $sys->down_desc;exit;
        }

        if (!$request->session()->has('daili_login_info')) {
            return redirect()->to(route('daili.login'));
        }

        return $next($request);
    }
}
