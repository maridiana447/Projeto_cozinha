<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Alimento;

class LoteController extends Controller
{
    public function lote_html(request $request){
        return view('lote');
    }

    public function cadastro_lote(Request $request){
        return view('cadastro_lote');
    }

    $alimento->estoque
}
