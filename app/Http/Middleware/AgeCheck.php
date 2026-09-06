<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        // echo "<pre>";
        // echo "This is the age check middleware. Your age is: " . $request. "<br>";

        if ($request->age < 18) {
            echo "You are not allowed to access this page. Your age is: " . $request->age;
            // return redirect('/home');
        }

        return $next($request);
    }
}
