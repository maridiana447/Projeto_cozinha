
@extends('layout.principal')

@section('fundo', '#fcf7f7')

@section('title', 'Cadastro de lote')

@section('content')

<div class="container d-flex justify-content-center">

    <div class="col-md-10 col-lg-7 rounded-5 p-5"
         style="background-color: #EBAEAE;">

        <h1 class="text-center mb-5">
            Cadastro de lote
        </h1>
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-5">
            <label for="text" class="form-label">Descrição</label>
            <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="Digite a descrição">
        </div>
        <div class="d-flex align-items-center justify-content-between gap-3">
            <div class="col-lg-5  col-md-12 col-sm-12 mt-3 mb-5">
                <label for="text" class="form-label">Quantidade</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="Digite a quantidade">
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-5">
                <label for="text" class="form-label">Validade</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="Digite a validade">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-5">
            <label for="text" class="form-label">Número do lote</label>
            <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="Digite o número do lote">
        </div>

        <div class="text-center mt-5">
            <button type="submit" class="btn btn-danger rounded-4 fs-3 px-4">
                Salvar
            </button>
        </div>

    </div>

</div>

@endsection
