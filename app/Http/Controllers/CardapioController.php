<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Cardapio;

class CardapioController extends Controller
{
    // Tela de cadastro do cardápio
    public function cardapio_html(Request $request)
    {
        return view('cadastro_cardapio');
    }

    // Salvar ou atualizar o cardápio de cada turno
    public function cadastro_cardapio(Request $request)
    {
        $request->validate([
            'turno' => 'required|in:medio_9,fundamental,senai',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $cardapio = Cardapio::where('turno', $request->turno)->first();

        $caminho = $request->file('imagem')
            ->store('cardapios', 'public');

        if ($cardapio) {
            if ($cardapio->imagem) {
                Storage::disk('public')->delete($cardapio->imagem);
            }

            $cardapio->update([
                'imagem' => $caminho,
            ]);
        } else {
            Cardapio::create([
                'turno' => $request->turno,
                'imagem' => $caminho,
            ]);
        }

        return redirect()
            ->back()
            ->with('sucesso', 'Cardápio publicado com sucesso!');
    }

    // Tela de visualização dos alunos
    public function mostrar(Request $request)
    {
        $turno = $request->query('turno');

        $turnosPermitidos = ['medio_9', 'fundamental', 'senai'];

        if (!in_array($turno, $turnosPermitidos, true)) {
            $turno = null;
        }

        $cardapio = $turno
            ? Cardapio::where('turno', $turno)->first()
            : null;

        return view('cardapio', compact('cardapio', 'turno'));
    }
}
