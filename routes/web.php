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

Route::get('/', function () {
    return view('welcome');
});

route::get('/cadastro_aluno',[AlunoController::class, 'aluno_html']) ->name('cadastro_aluno');
route::get('/login_aluno',[LoginController::class, 'login_html']) ->name('login_aluno');
route::get('/login_funcionario',[LoginfuncionarioController::class, 'funcionario_html']) ->name('login_funcionario');
route::get('/inicio',[InicioController::class, 'inicio']) ->name('inicio');
route::get('/alimento',[AlimentoController::class, 'alimento_html']) ->name('alimento');
route::get('/cardapio',[CardapioController::class, 'cardapio_html']) ->name('cardapio');
route::get('/dicas',[DicasController::class, 'dicas_html']) ->name('dicas');
route::get('/presenca',[PresencaController::class, 'presenca_html']) ->name('presenca');