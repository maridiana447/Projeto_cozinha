<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;

class CardapioController extends Controller
{
    public function cardapio_html(request $request){
        return view('cardapio');
    }
}
