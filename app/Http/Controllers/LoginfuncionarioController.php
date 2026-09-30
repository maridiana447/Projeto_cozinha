<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class LoginfuncionarioController extends Controller
{
    public function funcionario_html(request $request){
        return view('login_funcionario');
    }
}
