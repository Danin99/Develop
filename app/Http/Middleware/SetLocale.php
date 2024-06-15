<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
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
            $locale = Session::get("locale");
            App::setLocale($locale ?? config('dummy.locale.km'));
            Carbon::setLocale($locale ?? config('dummy.locale.km'));

            return $next($request);
      }
}
