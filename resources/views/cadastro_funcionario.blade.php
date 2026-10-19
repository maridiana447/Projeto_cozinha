@extends('layout.principal')

@section('fundo', '#fcf7f7')

@section('title', 'Cadastro de funcionário')

@section('content')

    <div class="container d-flex justify-content-center py-4">

        <div class="col-md-8 col-lg-7 rounded-5 p-5 text-white" style="background-color: #bd2323;">

            <h2 class="text-center mb-2">
                Cadastrar novo funcionário
            </h2>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">Senha</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">NIF</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">Data de nascimento</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">Cargo</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-danger rounded-4 fs-3 px-4">
                    Salvar
                </button>
            </div>

        </div>

    </div>

@endsection
