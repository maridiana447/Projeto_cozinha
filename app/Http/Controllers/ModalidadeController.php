<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modalidade;

class ModalidadeController extends Controller
{
    public function modalidades(request $request){
        return view('modalidades');
    }
    public function cadastro_aluno_presenca(request $request){
        return view('cadastro_aluno_presenca');
    }
    public function salvar_modalidade(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);
        try {
            $modalidade = new Modalidade();
            $modalidade->nome = $request->nome;
            $modalidade->save();
    
            return response()->json(['message' => 'Modalidade cadastrada com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar modalidade', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_modalidade(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $modalidade = Modalidade::find($request->id);
        if($modalidade){
            return response()->json(['nome' => $modalidade, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'modalidade não encontrada', 'erro' => 's'], 200);
        }
    }

    public function listar_modalidades(){
        $modalidade = Modalidade::select('nome',)->get();
        return response()->json(['modalidade' => $modalidade, 'erro' => 'n'], 200);
    }

    public function alterar_modalidade(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:modalidade,id',
            'nome' => 'required|string|max:255',
        ]);
        try {
            $modalidade = Modalidade::find($request->id);

            if($modalidade->nome != $request->nome){
                $modalidade_nome_igual = Modalidade::where('nome', $request->nome)->first();
                if($modalidade_nome_igual){
                    return response()->json(['message' => 'Modalidade já cadastrada', 'erro' => 's'], 200);
                }
            }
            $modalidade->nome = $request->nome;
            $modalidade->save();
    
            return response()->json(['message' => 'Modalidade atualizada com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar Modalidade', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_modalidade(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:modalidade,id',
        ]);
        try {
            $modalidade = Modalidade::find($request->id);
            $modalidade->delete();
            return response()->json(['message' => 'Modalidade deletada com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar modalidade', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
