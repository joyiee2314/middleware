<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExtractToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function handle(Request $request, Closure $next)
     {
         $token = $request->bearerToken();
 
         if (!$token) {
             return response()->json(["error" => "unauthorized"], 401);
         }

         if ($token !== env('BEARER_TOKEN')){
            return response()->json(["error" => "Invalid Token"], 403); 
         }
        
         return $next($request);
     }
}
