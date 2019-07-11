<?php
namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

class Locale
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
    $locale=Session::get('locale', Config::get('app.locale'));
    App::setLocale($locale);
    return $next($request);
    }
}