
@extends('layout.principal')
@section('fundo', '#fcf7f7')
@section('title', 'Presenças de alunos')

@section('content')

<div class="container-fluid px-4">

    <div class="row align-items-center mb-4 g-3 d-flex justify-content-between">

        <div class="col-md-4">
            <input type="text" class="form-control w-75" placeholder="Pesquisar presenças...">
        </div>

        <div class="col-md-3 d-flex align-items-center justify-content-between gap-2">
            <label for="filtro" class="form-label text-nowrap">Filtrar por:</label>
            <select class="form-select w-60">
                <option value="data_proxima">Data mais próxima</option>
                <option value="data_distante">Data mais distante</option>
            </select>
        </div>
        <div class="col-md-2 text-end">
            <a href="#" class="text-danger text-decoration-none">
                Gerenciar modalidades
            </a>
        </div>

        <div class="col-md-2 text-end">
            <a href="#" class="text-danger text-decoration-none">
                Marcar presença
            </a>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-3">Modalidade</div>
            <div class="col-3">Quantidade de alunos</div>
            <div class="col-3">Refeição</div>
            <div class="col-3">Data</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-3 fs-4 fst-italic">Academia</div>
            <div class="col-3 fs-4 fst-italic">2</div>
            <div class="col-3 fs-4 fst-italic">Almoço</div>

            <div class="col-3 fst-italic">
                <div class="fs-4">10/10/2026</div>
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Ver alunos
                </button>
            </div>
        </div>

    </div>

    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-3">Modalidade</div>
            <div class="col-3">Quantidade de alunos</div>
            <div class="col-3">Refeição</div>
            <div class="col-3">Data</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-3 fs-4 fst-italic">Robótica</div>
            <div class="col-3 fs-4 fst-italic">7</div>
            <div class="col-3 fs-4 fst-italic">Almoço</div>

            <div class="col-3 fst-italic">
                <div class="fs-4">10/10/2026</div>
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Ver alunos
                </button>
            </div>
        </div>

    </div>
    <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

        <div class="row text-center fst-italic">
            <div class="col-3">Modalidade</div>
            <div class="col-3">Quantidade de alunos</div>
            <div class="col-3">Refeição</div>
            <div class="col-3">Data</div>
        </div>

        <div class="row text-center align-items-center mt-3">
            <div class="col-3 fs-4 fst-italic">Personaliza</div>
            <div class="col-3 fs-4 fst-italic">15</div>
            <div class="col-3 fs-4 fst-italic">Almoço</div>

            <div class="col-3 fst-italic">
                <div class="fs-4">10/10/2026</div>
                <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                    Ver alunos
                </button>
            </div>
        </div>

    </div>

</div>

@endsection
