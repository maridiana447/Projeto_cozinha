<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class LoteController extends Controller
{
    public function lote_html(request $request){
        return view('lote');
    }

}
