@extends('layout.principal')
@section('title', 'Cadastro de Funcionário Aula')
@section('fundo', '#BD2323')
@section('content')
@vite('resources/js/cadastro_funcionario.js')
<h3 class="text-center">Cadastro de funcionário</h3>
<div class="row mt-3 justify-content-center d-flex">

    <div class="col-6 row">
        <div class="mb-3 col-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control form-control-sm" id="nome" name="nome"
                placeholder="">
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email"
                placeholder="">
        </div>
        <div class="mb-3 col-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control form-control-sm" id="senha" name="senha"
                placeholder="">
        </div>
        <div class="mb-3 col-6">
            <label for="confirmar_senha" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control form-control-sm" id="data_nascimento"
                name="data_nascimento" placeholder="">
        </div>
        <div class="mb-3 col-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control form-control-sm" id="cpf" name="cpf"
                placeholder="">
        </div>
        <div class="mb-3 col-6">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control form-control-sm" id="cargo" name="cargo"
                placeholder="">
        </div>
        <div class="mb-3 col-6">
            <label for="nif" class="form-label">NIF</label>
            <input type="text" class="form-control form-control-sm" id="nif" name="nif"
                placeholder="">
        </div>
        <div class="mb-3 col-6">
            <label for="funcionario" class="form-label">Funcionário</label>
            <select class="form-select" id="funcionario" name="funcionario">
            @foreach ( $funcionarios as $f )
                <option value="{{ $f->id }}">{{ $f->nome }}</option>
            @endforeach
            </select>
        </div>
            <button type="button" id="cadastrar" class="btn btn-primary btn-sm mt-2">Cadastrar</button>
    </div>
</div>

@endsection