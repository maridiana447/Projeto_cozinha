<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/aluno_cadastro', [AlunoController::class, 'salvar_usuario']);
Route::get('/ver_aluno', [AlunoController::class, 'ver_aluno']);
Route::get('/listar_alunos', [AlunoController::class, 'listar_alunos']);
Route::get('/listar_alunos_simples', [AlunoController::class, 'listar_alunos_simples']);
Route::put('/alterar_usuario', [AlunoController::class, 'alterar_usuario']);
Route::delete('/deletar_usuario', [AlunoController::class, 'deletar_usuario']);
Route::post('/cadastro_alimento', [AlimentoController::class,'cadastro_alimento'])->name('cadastro_alimento');