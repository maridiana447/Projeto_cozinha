<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;
use Illuminate\Support\Facades\DB;

class AlimentoController extends Controller
{
    public function alimento_html(request $request){
        return view('alimento');
    }

    public function cadastro_alimento(request $request){
        return view('cadastro_alimento');
    }

}

