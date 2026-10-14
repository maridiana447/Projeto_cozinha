<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Cardapio;

class CardapioController extends Controller
{
    public function cardapio_html(Request $request)
    {
        return view('cadastro_cardapio');
    }


    public function mostrar(Request $request)
    {
        return view('cardapio');
    }
}
