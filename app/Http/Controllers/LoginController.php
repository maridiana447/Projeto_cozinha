<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class LoginController extends Controller
{
    public function login_html(request $request){
        return view('login_aluno');
    }
}
