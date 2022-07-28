<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Candidature;
use Auth;

class ConfirmedMiddleware
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
            
        $userId = Auth::user()->id;
        
            if ($this->user_permis() == $userId)
            {
               return $next($request);
            }
            else {

                return redirect('/');
            }


        
    }

    public function user_permis(){
            $candidature = new Candidature();
            $userId = Auth::user()->id;
            $candidature = $candidature->first()->whereUser_id($userId)->get();
                foreach($candidature as $candidate){
                    $user_id = $candidate->user_id;
                    return $user_id;
                }
        
        }
}
