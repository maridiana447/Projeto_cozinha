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

    public function alimento(){
    $alimentos = DB::table('estoque')
        ->join(
            'alimento',
            'estoque.id_alimento',
            '=',
            'alimento.id'
        )
        ->select(
            'alimento.nome',
            DB::raw('SUM(estoque.quantidade) as quantidade_total')
        )
        ->groupBy('alimento.id_alimento', 'alimento.nome')
        ->orderByDesc('quantidade_total')
        ->get();

    return view('alimentos_agrupados', compact('alimentos'));
    }
    public function cadastro_alimento(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'unidade_medida' => 'required|string|max:255',
            'categoria' => 'required|string',
            'descricao' => 'nullable|string',
            'qtd_minima' => 'required|numeric|min:0',
        ]);
        try {
        $alimento = new Alimento();

        $alimento->nome = $request['nome'];
        $alimento->unidade_medida = $request['unidade_medida'];
        $alimento->categoria = $request['categoria'];
        $alimento->descricao = $request['descricao'] ?? null;
        $alimento->qtd_minima = $request['qtd_minima'];

        $alimento->save();

        return response()->json(['message' => 'Alimento cadastrado com sucesso!','erro' => 'n'], 200);

    } catch (\Throwable $th) {
        return response()->json(['message' => 'Erro ao cadastrar alimento.','erro' => 's','msg_erro' => $th->getMessage()], 200);
    }
}

}

