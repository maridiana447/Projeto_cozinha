
@extends('layout.principal')
@section('fundo', '#fcf7f7')
@section('title', 'Lotes de alimentos')

@section('content')

<div class="container-fluid px-4">

    <div class="row align-items-center mb-4 g-3">

        <div class="col-md-5 d-flex align-items-center gap-2">
            <p>Selecione o alimento:</p>
            <select class="form-select w-50">
                <option value="">Categoria</option>
                <option value="arroz">Arroz</option>
            </select>
        </div>

        <div class="col-md-3 d-flex align-items-center gap-2">
            <p>Filtrar por:</p>
            <select class="form-select w-50">
                <option value="">Categoria</option>
                <option value="validade_proxima">Validade mais próxima</option>
                <option value="validade_distante">Validade mais distante</option>
                <option value="maior_quantidade">Maior quantidade</option>
                <option value="menor_quantidade">Menor quantidade</option>
            </select>
        </div>

        <div class="col-md-4 text-end">
            <a href="#" class="text-danger text-decoration-none">
                Adicionar mais deste alimento
            </a>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-4">Número do Lote</div>
            <div class="col-4">Quantidade</div>
            <div class="col-4">Validade</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-4 fst-italic">
                <div class="fs-4">12345678</div>
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Alterar
                </button>
            </div>
            <div class="col-4 fs-4 fst-italic">50 KG</div>

            <div class="col-4 fst-italic">
                <div class="fs-4">10/10/2026</div>
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Excluir
                </button>
            </div>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-4">Número do Lote</div>
            <div class="col-4">Quantidade</div>
            <div class="col-4">Validade</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-4 fst-italic">
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Alterar
                </button>
            </div>
            <div class="col-4 fs-4 fst-italic"></div>

            <div class="col-4 fst-italic">
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Excluir
                </button>
            </div>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-4">Número do Lote</div>
            <div class="col-4">Quantidade</div>
            <div class="col-4">Validade</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-4 fst-italic">
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Alterar
                </button>
            </div>
            <div class="col-4 fs-4 fst-italic"></div>

            <div class="col-4 fst-italic">
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Excluir
                </button>
            </div>
        </div>

    </div>

</div>

@endsection
