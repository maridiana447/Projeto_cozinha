<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presenca;

class PresencaController extends Controller
{
    public function presenca_html(request $request){
        return view('presenca');
    }
    public function marcar_presenca(request $request){
        return view('marcar_presenca');
    }
}
