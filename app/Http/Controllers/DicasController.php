<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dicas;

class DicasController extends Controller
{
    public function dicas_html(request $request){
        return view('dicas');
    }

    public function salvar_dica(Request $request){
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:255',
            'categoria' => 'required|string|max:255',
            'id_funcionario' => 'required|integer|exists:funcionario,id',
        ]);
        try {
            $dica = new Dicas();
            $dica->titulo = $request->titulo;
            $dica->descricao = $request->descricao;
            $dica->categoria = $request->categoria;
            $dica->id_funcionario = $request->id_funcionario;
            $dica->save();

            return response()->json(['message' => 'Dica cadastrada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar dica', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_dica(Request $request){
        $request->validate([
            'titulo' => 'required|string|exists:dicas,titulo',
        ]);
        $dica = Dicas::where('titulo', $request->titulo)->first();
        if($dica){
            return response()->json(['dica' => $dica, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Dica não encontrada', 'erro' => 's'], 200);
        }
    }

    public function listar_dicas(){
        $dicas = Dicas::all();
        return response()->json(['dicas' => $dicas, 'erro' => 'n'], 200);
    }

    public function alterar_dica(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:dicas,id',
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:255',
            'categoria' => 'required|string|max:255',
            'id_funcionario' => 'required|integer|exists:funcionario,id',
        ]);
        try {
            $dica = Dicas::find($request->id);
            $dica->funcionario;
            $dica->titulo = $request->titulo;
            $dica->descricao = $request->descricao;
            $dica->categoria = $request->categoria;
            $dica->id_funcionario = $request->id_funcionario;
            $dica->save();

            return response()->json(['message' => 'Dica atualizada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar dica', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_dica(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:dicas,id',
        ]);
        try {
            $dica = Dicas::find($request->id);
            $dica->delete();
            return response()->json(['message' => 'Dica deletada com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar dica', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}