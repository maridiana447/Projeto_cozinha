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
    public function salvar_lote(Request $request){
        $request->validate([
            'id_alimento' => 'required|integer|exists:alimento,id',
            'descricao' => 'nullable|string|max:255',
            'numero_lote' => 'required|string|max:255',
            'quantidade' => 'required|numeric|min:0',
            'data_validade' => 'required',
        ]);
        try {
            $lote = new Estoque();
            $lote->id_alimento = $request->id_alimento;
            $lote->descricao = $request->descricao;
            $lote->numero_lote = $request->numero_lote;
            $lote->quantidade = $request->quantidade;
            $lote->data_validade = $request->data_validade;
            $lote->save();
    
            return response()->json(['message' => 'Lote cadastrado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar lote', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_lote(Request $request){
        $request->validate([
            'numero_lote' => 'required|string|exists:estoque,numero_lote',
        ]);
        $lote = Estoque::where('numero_lote', $request->numero_lote)->first();
        if($lote){
            return response()->json(['lote' => $lote, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Lote não encontrado', 'erro' => 's'], 200);
        }
    }

    public function listar_lotes(){
        $lote = Estoque::all();
        return response()->json(['lote' => $lote, 'erro' => 'n'], 200);
    }

    public function listar_lotes_simples(){
        $lote = Estoque::select('numero_lote', 'id_alimento','quantidade','data_validade')->get();
        return response()->json(['lote' => $lote, 'erro' => 'n'], 200);
    }

    public function alterar_lote(Request $request){
        $request->validate([
            'numero_lote' => 'required|string|exists:estoque,numero_lote',
            'id_alimento' => 'required|integer|exists:alimento,id',
            'descricao' => 'nullable|string|max:255',
            'quantidade' => 'required|numeric|min:0',
            'data_validade' => 'required',
        ]);
        try {
            $lote = Estoque::where('numero_lote', $request->numero_lote)->first();

            if($lote->numero_lote != $request->numero_lote){
                $lote_numero_igual = Estoque::where('numero_lote', $request->numero_lote)->first();
                if($lote_numero_igual){
                    return response()->json(['message' => 'Número do lote já cadastrado', 'erro' => 's'], 200);
                }
            }

            $lote->id_alimento = $request->id_alimento;
            $lote->descricao = $request->descricao;
            $lote->quantidade = $request->quantidade;
            $lote->data_validade = $request->data_validade;
            $lote->save();

            return response()->json(['message' => 'Lote atualizado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar lote', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_lote(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:estoque,id',
        ]);
        try {
            $lote = Estoque::find($request->id);
            $lote->delete();
            return response()->json(['message' => 'Lote deletado com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    //$alimento->estoque
}
