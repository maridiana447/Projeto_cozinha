<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno_presenca;

class AlunoPresencaController extends Controller
{
    public function salvar_aluno_presenca(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:aluno_presenca',
            'cpf' => 'required|string|max:14|min:11|unique:aluno_presenca',
        ]);
        try {
            $aluno_presenca = new Aluno_presenca();
            $aluno_presenca->nome = $request->nome;
            $aluno_presenca->email = $request->email;
            $aluno_presenca->cpf = $request->cpf;
            $aluno_presenca->save();
    
            return response()->json(['message' => 'Aluno cadastrado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar aluno', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_aluno_presenca(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $aluno_presenca = Aluno_presenca::find($request->id);
        if($aluno_presenca){
            return response()->json(['aluno' => $aluno_presenca, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Aluno não encontrado', 'erro' => 's'], 200);
        }
    }

    public function listar_alunos_presenca(){
        $aluno_presenca = Aluno_presenca::select('nome', 'email', 'cpf')->get();
        return response()->json(['aluno' => $aluno_presenca, 'erro' => 'n'], 200);
    }

    public function alterar_aluno(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:aluno_presenca,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'cpf' => 'required|string|max:14|min:11',
        ]);
        try {
            $aluno_presenca = Aluno_presenca::find($request->id);

            if($aluno_presenca->cpf != $request->cpf){
                $alunoP_cpf_igual = Aluno_presenca::where('cpf', $request->cpf)->first();
                if($alunoP_cpf_igual){
                    return response()->json(['message' => 'CPF já cadastrado', 'erro' => 's'], 200);
                }
            }
            if($aluno_presenca->email != $request->email){
                $alunoP_email_igual = Aluno_presenca::where('email', $request->email)->first();
                if($alunoP_email_igual){
                    return response()->json(['message' => 'Email já cadastrado', 'erro' => 's'], 200);
                }
            }
            $aluno_presenca->nome = $request->nome;
            $aluno_presenca->email = $request->email;
            $aluno_presenca->cpf = $request->cpf;
            $aluno_presenca->save();
    
            return response()->json(['message' => 'Aluno atualizado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar aluno', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_aluno(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:aluno_presenca,id',
        ]);
        try {
            $aluno_presenca = Aluno_presenca::find($request->id);
            $aluno_presenca->delete();
            return response()->json(['message' => 'Aluno deletado com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar aluno', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
