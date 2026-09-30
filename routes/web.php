<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginFuncionarioController;
use App\Http\Controllers\InicioController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/cadastro_aluno',[AlunoController::class, 'aluno_html']) ->name('cadastro_aluno');
route::get('/login_aluno',[LoginController::class, 'login_html']) ->name('login_aluno');
route::get('/login_funcionario',[LoginfuncionarioController::class, 'funcionario_html']) ->name('login_funcionario');
route::get('/inicio',[InicioController::class, 'inicio']) ->name('inicio');