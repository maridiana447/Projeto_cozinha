<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;

class AlimentoController extends Controller
{
    public function alimento_html(request $request){
        return view('alimento');
    }
}
