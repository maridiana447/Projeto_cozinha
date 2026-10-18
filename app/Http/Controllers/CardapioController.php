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

    public function salvar_cardapio(Request $request){
        $request->validate([
            'imagem' => 'required|string|max:255',
            'turno' => 'required|string|max:255',
        ]);
        try {
            $cardapio = new Cardapio();
            $cardapio->imagem = $request->imagem;
            $cardapio->turno = $request->turno;
            $cardapio->save();
    
            return response()->json(['message' => 'Cardápio cadastrado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar cardápio', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_cardapio(Request $request){
        $request->validate([
            'turno' => 'required|string|max:255',
        ]);
        $cardapio = Cardapio::where('turno', $request->turno)->first();
        $cardapio = Cardapio::select('imagem')->get();
        if($cardapio){
            return response()->json(['cardapio' => $cardapio, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Cardápio não encontrado', 'erro' => 's'], 200);
        }
    }
    

    public function deletar_cardapio(Request $request){
        $request->validate([
            'turno' => 'required|string|exists:cardapios,turno',
        ]);
        try {
            $cardapio = Cardapio::where('turno', $request->turno)->first();
            $cardapio->delete();
            return response()->json(['message' => 'Cardápio deletado com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar cardápio', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
