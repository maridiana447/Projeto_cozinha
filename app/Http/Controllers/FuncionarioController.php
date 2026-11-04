<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\FuncionarioToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FuncionarioController extends Controller
{
    public function cadastro_funcionario(Request $request)
    {
        return view('cadastro_funcionario');
    }

    public function funcionarios(Request $request)
    {
        return view('funcionarios');
    }

    public function salvar_funcionario(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:funcionario',
            'senha' => 'required|string',
            'data_nascimento' => 'nullable|date',
            'cpf' => 'required|string|max:14|min:11|unique:funcionario',
            'cargo' => 'required|string|max:255',
            'nif' => 'required|string|max:255|unique:funcionario',
        ]);
        try {
            $funcionario = new Funcionario;
            $funcionario->nome = $request->nome;
            $funcionario->email = $request->email;
            $funcionario->senha = Hash::make($request->senha);
            $funcionario->data_nascimento = $request->data_nascimento;
            $funcionario->cpf = $request->cpf;
            $funcionario->cargo = $request->cargo;
            $funcionario->nif = $request->nif;
            $funcionario->save();

            return response()->json(['message' => 'Usuário cadastrado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_funcionario(Request $request)
    {
        $request->validate([
            'nif' => 'required|string|exists:funcionario,nif',
        ]);
        $funcionario = Funcionario::where('nif', $request->nif)->first();
        if ($funcionario) {
            return response()->json(['funcionario' => $funcionario, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Funcionário não encontrado', 'erro' => 's'], 200);
        }
    }

    public function listar_funcionarios()
    {
        $funcionario = Funcionario::all();

        return response()->json(['funcionario' => $funcionario, 'erro' => 'n'], 200);
    }

    public function listar_funcionarios_simples()
    {
        $funcionario = Funcionario::select('nome', 'nif')->get();

        return response()->json(['funcionario' => $funcionario, 'erro' => 'n'], 200);
    }

    public function alterar_funcionario(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:funcionario,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'senha' => 'required|string',
            'data_nascimento' => 'nullable|date',
            'cpf' => 'required|string|max:14|min:11',
            'cargo' => 'required|string|max:255',
            'nif' => 'required|string|max:255',
        ]);
        try {
            $funcionario = Funcionario::find($request->id);

            if ($funcionario->cpf != $request->cpf) {
                $funcionario_cpf_igual = Funcionario::where('cpf', $request->cpf)->first();
                if ($funcionario_cpf_igual) {
                    return response()->json(['message' => 'CPF já cadastrado', 'erro' => 's'], 200);
                }
            }
            if ($funcionario->email != $request->email) {
                $funcionario_email_igual = Funcionario::where('email', $request->email)->first();
                if ($funcionario_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado', 'erro' => 's'], 200);
                }
            }
            if ($funcionario->nif != $request->nif) {
                $funcionario_nif_igual = Funcionario::where('nif', $request->nif)->first();
                if ($funcionario_nif_igual) {
                    return response()->json(['message' => 'NIF já cadastrado', 'erro' => 's'], 200);
                }
            }
            $funcionario->nome = $request->nome;
            $funcionario->email = $request->email;
            $funcionario->senha = Hash::make($request->senha);
            $funcionario->data_nascimento = $request->data_nascimento;
            $funcionario->cpf = $request->cpf;
            $funcionario->cargo = $request->cargo;
            $funcionario->nif = $request->nif;
            $funcionario->save();

            return response()->json(['message' => 'Usuário atualizado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_funcionario(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:funcionario,id',
        ]);
        try {
            $funcionario = Funcionario::find($request->id);
            $funcionario->delete();

            return response()->json(['message' => 'Funcionário deletado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar funcionário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function login_funcionario(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'senha' => 'required',
        ]);
        $funcionario = Funcionario::where('email', '=', $request->email)->first();
        if ($funcionario) {
            if (Hash::check($request->senha, $funcionario->senha)) {
                $funcionario_token = new FuncionarioToken;
                $funcionario_token->funcionario_id = $funcionario->id;
                $funcionario_token->token = Hash::make($funcionario->id.$funcionario->email.now());
                $funcionario_token->valido_ate = now()->addDays(7);
                $funcionario_token->save();

                return response()->json(['message' => 'Login realizado com sucesso', 'funcionario_id' => $funcionario->id, 'erro' => 'n', 'token' => $funcionario_token->token], 200);
            } else {
                return response()->json(['message' => 'Usuario ou senha não encontrado', 'erro' => 's'], 200);
            }

        } else {
            return response()->json(['message' => 'email não encontrado', 'erro' => 's'], 200);
        }

    }

    public function logout(Request $request)
    {
        FuncionarioToken::where('funcionario_id', $request->funcionario_id)
            ->where('token', $request->token)
            ->delete();

        return response()->json([
            'message' => 'Logout realizado com sucesso',
            'erro' => 'n',
        ], 200);
    }
}
