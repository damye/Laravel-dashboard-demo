<?php

namespace App\Http\Middleware;

use Closure;

class RequestRoute
{
    /**
     * process url for selected
     * this work must handle before fill view data
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // parse url
        preg_match('/^http:\/\/([\w.]+)\/([\w]+)/i', $request->url(), $matches);

        // add share view
        if(!empty($matches[2]))
        {
            view()->share('requestRoute',$matches[2]);
        }

        return $next($request);
    }
}
