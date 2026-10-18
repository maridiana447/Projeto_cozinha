<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno_turma;

class AlunoTurmaController extends Controller
{
    public function salvar_aluno_turma(Request $request){
        $request->validate([
            'id_aluno_presenca' => 'required|integer|exists:aluno_presenca,id',
            'id_modalidade' => 'required|integer|exists:modalidade,id',
        ]);
        try {
            $aluno_turma_repetido = Aluno_turma::where(
                'id_aluno_presenca',
                $request->id_aluno_presenca
            )
            ->where('id_modalidade', $request->id_modalidade)
            ->first();

            if ($aluno_turma_repetido) {
                return response()->json([
                    'message' => 'Aluno já cadastrado nesta turma',
                    'erro' => 's'
                ], 200);
            }
            
            $aluno_turma = new Aluno_turma();
            $aluno_turma->id_aluno_presenca = $request->id_aluno_presenca;
            $aluno_turma->id_modalidade = $request->id_modalidade;
            $aluno_turma->save();
    
            return response()->json(['message' => 'Aluno cadastrado na modalidade com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar aluno na turma', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_aluno_turma(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $aluno_turma = Aluno_turma::find($request->id);
        if($aluno_turma){
            return response()->json(['aluno' => $aluno_turma, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Aluno não encontrado', 'erro' => 's'], 200);
        }
    }

    public function alterar_aluno_turma(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:aluno_turma,id',
            'id_aluno_presenca' => 'required|integer|exists:aluno_presenca,id',
            'id_modalidade' => 'required|integer|exists:modalidade,id',

        ]);
        try {
            $aluno_turma = Aluno_turma::find($request->id);

            if (!$aluno_turma) {
                return response()->json(['message' => 'Vínculo não encontrado','erro' => 's'], 200);
            }

            $aluno_presenca_repetido = Aluno_turma::where(
                'id_aluno_presenca',
                $request->id_aluno_presenca
            )
            ->where('id_modalidade', $request->id_modalidade)
            ->where('id', '!=', $aluno_turma->id)
            ->first();

            if ($aluno_presenca_repetido) {
                return response()->json([ 'message' => 'Aluno já cadastrado nesta modalidade', 'erro' => 's' ], 200);
            }

            $aluno_turma->id_aluno_presenca = $request->id_aluno_presenca;
            $aluno_turma->id_modalidade = $request->id_modalidade;

            $aluno_turma->save();

            return response()->json([ 'message' => 'Informações atualizadas com sucesso!', 'erro' => 'n' ], 200);

        } catch (\Throwable $th) { 
            return response()->json([ 'message' => 'Erro ao atualizar aluno na turma', 'erro' => 's', 'msg_erro' => $th->getMessage()], 500);
        }
    }

    public function deletar_aluno_turma(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:aluno_turma,id',
        ]);
        try {
            $aluno_turma = Aluno_turma::find($request->id);
            $aluno_turma->delete();
            return response()->json(['message' => 'Aluno deletado da turma com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar aluno da turma', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
