<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function cadastro_html(request $request){
        return view('cadastro_funcionario');
    }
}
