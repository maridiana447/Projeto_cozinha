<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginFuncionarioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\DicasController;
use App\Http\Controllers\PresencaController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\ModalidadeController;
Route::get('/', function () {
    return view('welcome');
});

route::get('/cadastro_aluno',[AlunoController::class, 'aluno_html']) ->name('cadastro_aluno');
route::get('/login_aluno',[LoginController::class, 'login_html']) ->name('login_aluno');
route::get('/login_funcionario',[LoginfuncionarioController::class, 'funcionario_html']) ->name('login_funcionario');
route::get('/inicio',[InicioController::class, 'inicio']) ->name('inicio');
route::get('/dicas',[DicasController::class, 'dicas_html']) ->name('dicas');
route::get('/presenca',[PresencaController::class, 'presenca_html']) ->name('presenca');
Route::get('/cadastro_cardapio', [CardapioController::class, 'cardapio_html'])->name('cardapio');
Route::post('/cadastro_cardapio', [CardapioController::class, 'cadastro_cardapio'])->name('cadastro_cardapio');
Route::get('/cardapio', [CardapioController::class, 'mostrar'])->name('mostrar_cardapio');
route::get('/alimento',[AlimentoController::class, 'alimento_html']) ->name('alimento');
route::get('/lote',[LoteController::class, 'lote_html']) ->name('lote');
route::get('/cadastro_lote',[LoteController::class, 'cadastro_lote']) ->name('cadastro_lote');
route::get('/cadastro_alimento',[AlimentoController::class, 'cadastro_alimento']) ->name('cadastro_alimento');
route::get('/marcar_presenca',[PresencaController::class, 'marcar_presenca']) ->name('marcar_presenca');
route::get('/alunos_presentes',[PresencaController::class, 'alunos_presentes']) ->name('alunos_presentes');
route::get('/modalidades',[ModalidadeController::class, 'modalidades']) ->name('modalidades');
route::get('/cadastro_aluno_presenca',[ModalidadeController::class, 'cadastro_aluno_presenca']) ->name('cadastro_aluno_presenca');
route::get('/cadastro_dicas',[DicasController::class, 'cadastro_dicas']) ->name('cadastro_dicas');
route::get('/funcionarios',[FuncionarioController::class, 'funcionarios']) ->name('funcionarios');
route::get('/cadastro_funcionario',[FuncionarioController::class, 'cadastro_funcionario']) ->name('cadastro_funcionario');