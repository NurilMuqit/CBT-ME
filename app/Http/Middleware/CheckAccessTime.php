<?php

namespace App\Http\Middleware;

use App\Models\Ujian;
use Closure;
use Illuminate\Http\Request;

class CheckAccessTime
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
        $now = now();

        $accessTime= Ujian::where('mulai', '<=', $now)->where('selesai','>=', $now)->first();
        if (!$accessTime) {
            return redirect()->route('access.denied');
        }
        
        return $next($request);
    }
}
