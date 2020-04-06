<?php

namespace App\Http\Middleware;

use Closure;
use App\User as User;

class CheckApiKey
{
    /**
     * Verifica se existe um registro com a chave enviada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = new User();
        $exists = $user->where('key', $request->header('x-api-key'))->get();
        
        if($exists->count() > 0) {
            return $next($request);
        }

        return response()->json([
            'error' => 'Invalid API key'
        ],400);
    }
}
