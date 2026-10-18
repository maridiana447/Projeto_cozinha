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
    public function salvar_presenca(Request $request){
        $request->validate([
            'dia' => 'required|date',
            'refeicao' => 'required|string',
            'alunos_presentes' => 'required|array|min:1',
            'alunos_presentes.*' => 'required|integer|exists:aluno_turma,id',
        ]);
        try {
            foreach ($request->alunos_presentes as $id_aluno_turma) {

                $presenca = new Presenca();

                $presenca->id_aluno_turma = $id_aluno_turma;
                $presenca->dia = $request->dia;
                $presenca->refeicao = $request->refeicao;

                $presenca->save();
            }
    
            return response()->json(['message' => 'Usuário cadastrado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_presenca(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $presenca = Presenca::find($request->id);
        if($presenca){
            return response()->json(['presenca' => $presenca, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Presença não encontrado', 'erro' => 's'], 200);
        }
    }


    public function listar_presencas(){
        $presenca = Presenca::select('id_aluno_turma', 'dia','refeicao')->get();
        return response()->json(['presenca' => $presenca, 'erro' => 'n'], 200);
    }

    public function alterar_presenca(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:presenca,id',
            'id_aluno_turma' => 'required|integer|exists:aluno_turma,id',
            'dia' => 'required|date',
            'refeicao' => 'required|string',
        ]);

        try {
            $presenca = Presenca::find($request->id);
            $presenca->id_aluno_turma = $request->id_aluno_turma;
            $presenca->dia = $request->dia;
            $presenca->refeicao = $request->refeicao;
            $presenca->save();

            return response()->json([
                'message' => 'Presença atualizada com sucesso!',
                'erro' => 'n'
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Erro ao atualizar presença',
                'erro' => 's',
                'msg_erro' => $th->getMessage()
            ], 500);
        }
    }

    public function deletar_presenca(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:presenca,id',
        ]);
        try {
            $presenca = Presenca::find($request->id);
            $presenca->delete();
            return response()->json(['message' => 'Presença deletada com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar presença', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
