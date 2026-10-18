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
    public function salvar_alimento(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'unidade_medida' => 'required|string|max:255',
            'categoria' => 'required|string',
            'descricao' => 'nullable|string|max:255',
            'qtd_minima' => 'required|numeric|min:0',
        ]);
        try {
            $alimento = new Alimento();
            $alimento->nome = $request->nome;
            $alimento->unidade_medida = $request->unidade_medida;
            $alimento->categoria = $request->categoria;
            $alimento->descricao = $request->descricao;
            $alimento->qtd_minima = $request->qtd_minima;
            $alimento->save();
    
            return response()->json(['message' => 'Alimento cadastrado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar alimento', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_alimento(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);
        $alimento = Alimento::where('nome', $request->nome)->first();
        $alimento = Alimento::select('nome', 'unidade_medida', 'categoria', 'descricao', 'qtd_minima')->get();
        if($alimento){
            return response()->json(['alimento' => $alimento, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Alimento não encontrado', 'erro' => 's'], 200);
        }
    }

    public function listar_alimentos(){
        $alimento = Alimento::all();
        $alimento = Alimento::select('nome', 'unidade_medida', 'categoria', 'descricao', 'qtd_minima')->get();
        return response()->json(['alimento' => $alimento, 'erro' => 'n'], 200);
    }

    public function alterar_alimento(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:alimento,id',
            'nome' => 'required|string|max:255',
            'unidade_medida' => 'required|string|max:255',
            'categoria' => 'required|string',
            'descricao' => 'nullable|string|max:255',
            'qtd_minima' => 'required|numeric|min:0',
        ]);
        try {
            $alimento = Alimento::find($request->id);

            if($alimento->nome != $request->nome){
                $alimento_nome_igual = Alimento::where('nome', $request->nome)->first();
                if($alimento_nome_igual){
                    return response()->json(['message' => 'Nome do alimento já cadastrado', 'erro' => 's'], 200);
                }
            }
            
            $alimento->nome = $request->nome;
            $alimento->unidade_medida = $request->unidade_medida;
            $alimento->categoria = $request->categoria;
            $alimento->descricao = $request->descricao;
            $alimento->qtd_minima = $request->qtd_minima;
            $alimento->save();
    
            return response()->json(['message' => 'Alimento atualizado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar alimento', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_alimento(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:alimento,id',
        ]);
        try {
            $alimento = Alimento::find($request->id);
            $alimento->delete();
            return response()->json(['message' => 'Alimento deletado com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar alimento', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

}

