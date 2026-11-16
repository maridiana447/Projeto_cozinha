<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\FuncionarioToken;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;

class LogadoAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Cookie::has('funcionario_id') && Cookie::has('token')){
            $funcionario_id = Cookie::get('funcionario_id');
            $token = Cookie::get('token');
            $token_funcionario = FuncionarioToken::where('funcionario_id', $funcionario_id)
            ->where('token', $token)
            ->where('valido_ate','>', Carbon::now())
            ->first();
            if($token_funcionario){
                $funcionario = Funcionario::find($funcionario_id);
                $request->funcionario = $funcionario;
                $admin = Admin::where('funcionario_id', $funcionario_id)->first();
                if($admin){
                    return $next($request);
                } else{
                    Cookie::forget('funcionario_id');
                    Cookie::forget('token');
                    return redirect()->route('login');
                }
            } else{
                Cookie::forget('funcionario_id');
                Cookie::forget('token');
                return redirect()->route('login');
            }
        }else{
            Cookie::forget('funcionario_id');
            Cookie::forget('token');
            return redirect()->route('login');
        }
    }
    
}
