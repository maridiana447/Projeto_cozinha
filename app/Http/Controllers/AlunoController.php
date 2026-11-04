<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\AlunoToken;
use Illuminate\Support\Facades\Hash;


class AlunoController extends Controller
{
    public function aluno_html(request $request){
        return view('cadastro_aluno');
    }
    public function salvar_usuario(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:aluno',
            'senha' => 'required|string',
            'cpf' => 'required|string|max:14|min:11|unique:aluno',
            'data_nascimento' => 'required',
        ]);
        try {
            $aluno = new Aluno();
            $aluno->nome = $request->nome;
            $aluno->email = $request->email;
            $aluno->senha = Hash::make($request->senha);
            $aluno->cpf = $request->cpf;
            $aluno->data_nascimento = $request->data_nascimento;
            $aluno->save();
    
            return response()->json(['message' => 'Usuário cadastrado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_aluno(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $aluno = Aluno::find($request->id);
        if($aluno){
            return response()->json(['aluno' => $aluno, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Aluno não encontrado', 'erro' => 's'], 200);
        }
    }

    public function listar_alunos(){
        $aluno = Aluno::all();
        return response()->json(['aluno' => $aluno, 'erro' => 'n'], 200);
    }

    public function listar_alunos_simples(){
        $aluno = Aluno::select('nome', 'email')->get();
        return response()->json(['aluno' => $aluno, 'erro' => 'n'], 200);
    }

    public function alterar_usuario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:aluno,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'senha' => 'required|string',
            'cpf' => 'required|string|max:14|min:11',
            'data_nascimento' => 'required',
        ]);
        try {
            $aluno = Aluno::find($request->id);

            if($aluno->cpf != $request->cpf){
                $aluno_cpf_igual = Aluno::where('cpf', $request->cpf)->first();
                if($aluno_cpf_igual){
                    return response()->json(['message' => 'CPF já cadastrado', 'erro' => 's'], 200);
                }
            }
            if($aluno->email != $request->email){
                $aluno_email_igual = Aluno::where('email', $request->email)->first();
                if($aluno_email_igual){
                    return response()->json(['message' => 'Email já cadastrado', 'erro' => 's'], 200);
                }
            }
            $aluno->nome = $request->nome;
            $aluno->email = $request->email;
            $aluno->senha = Hash::make($request->senha);
            $aluno->cpf = $request->cpf;
            $aluno->data_nascimento = $request->data_nascimento;
            $aluno->save();
    
            return response()->json(['message' => 'Usuário atualizado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_usuario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:aluno,id',
        ]);
        try {
            $aluno = Aluno::find($request->id);
            $aluno->delete();
            return response()->json(['message' => 'Usuário deletado com sucesso!','erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function login(Request $Request){
        $Request->validate([
            'email'=> 'required',
            'senha'=> 'required'
        ]);
        $aluno = Aluno::where('email', '=', $Request->email)->first();
        if($aluno){
            if(hash::check($Request->senha, $aluno->senha)){
                $aluno_token = new AlunoToken();
                $aluno_token->aluno_id = $aluno->id;
                $aluno_token->token = hash::make($aluno->id . $aluno->email . now());
                $aluno_token->valido_ate = now()->addDays(7);
                $aluno_token->save();
                return response()->json(['message'=>'Login realizado com sucesso',"aluno_id"=> $aluno->id ,'erro' => 'n', 'token'=> $aluno_token->token],200);
            }else{
                return response()->json(['message'=>'Usuario ou senha não encontrado', 'erro' => 's'],200);
            }

        }else{
            return response()->json(['message'=>'email não encontrado', 'erro' => 's'],200);
        }

    }
    public function logout(Request $request){
        AlunoToken::where('aluno_id', $request->aluno_id)
            ->where('token', $request->token)
            ->delete();
        return response()->json(['message' => 'Logout realizado com sucesso','erro' => 'n'], 200);
    }

}
