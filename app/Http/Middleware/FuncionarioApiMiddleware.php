<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Funcionario;
use App\Models\FuncionarioToken;
use Carbon\Carbon;


class FuncionarioApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $Request, Closure $next): Response
    {
        if($Request->has('token') && $Request->has('funcionario_id')){
            $token = FuncionarioToken::where('funcionario_id', $Request->funcionario_id)
            ->where('token', $Request->token)
            ->where('valido_ate','>', Carbon::now())
            ->first();
            if($token){
                return $next($Request);
            }

            return response()->json(['message'=>'Token inválido ou expirado', 'erro' => 's'],200);
        }else{
            return response()->json(['message'=>'Token não fornecido', 'erro' => 's'],200);
        }
    }
}