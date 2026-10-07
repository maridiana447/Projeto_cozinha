<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dicas;

class DicasController extends Controller
{
    public function dicas_html(request $request){
        return view('dicas');
    }

}
