<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\DB;

class GetActivites
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
        $activitesList = DB::table('activite')->select('*')->get();
        $jsonList = json_encode($activitesList);
        echo $jsonList;
        return $next($request);
    }
}

