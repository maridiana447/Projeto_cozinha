
@extends('layout.principal')
@section('fundo', '#fcf7f7')

@section('content')

<div class="container-fluid px-4">

    <div class="row align-items-center mb-4 g-3">

        <div class="col-md-5">
            <input type="text" class="form-control w-75" placeholder="Pesquisar alimentos...">
        </div>

        <div class="col-md-3">
            <select class="form-select w-50">
                <option value="">Categoria</option>
                <option value="graos">Grãos</option>
                <option value="carnes">Carnes</option>
                <option value="laticinios">Laticínios</option>
                <option value="hortifruti">Hortifruti</option>
                <option value="outros">Outros</option>
            </select>
        </div>

        <div class="col-md-4 text-end">
            <a href="#" class="text-danger text-decoration-none">
                Adicionar novo alimento
            </a>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-4">Alimento</div>
            <div class="col-4">Quantidade</div>
            <div class="col-4">Validade</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-4 fs-4 fst-italic">Arroz</div>
            <div class="col-4 fs-4 fst-italic">50 KG</div>

            <div class="col-4 fst-italic">
                <div class="fs-4">10/10/2026</div>
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Listar lotes
                </button>
            </div>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-4">Alimento</div>
            <div class="col-4">Quantidade</div>
            <div class="col-4">Validade</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-4 fs-4 fst-italic"></div>
            <div class="col-4 fs-4 fst-italic"></div>

            <div class="col-4 fst-italic">
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Listar lotes
                </button>
            </div>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-4">Alimento</div>
            <div class="col-4">Quantidade</div>
            <div class="col-4">Validade</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-4 fs-4 fst-italic"></div>
            <div class="col-4 fs-4 fst-italic"></div>

            <div class="col-4 fst-italic">
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Listar lotes
                </button>
            </div>
        </div>

    </div>

</div>

@endsection
