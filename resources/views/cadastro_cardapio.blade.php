
@extends('layout.principal')

@section('fundo', '#fcf7f7')

@section('title', 'Cadastro de cardápio')

@section('content')

<div class="container d-flex justify-content-center py-4">

    <div class="col-md-8 col-lg-7 rounded-5 p-5"
         style="background-color: #EBAEAE;">

        <h1 class="text-center mb-5">
            Cadastro de cardápio
        </h1>

        <div class="mb-5">
            <label for="imagem" class="form-label fs-4">
                Carregue o arquivo do cardápio:
            </label>

            <input type="file" name="imagem" id="imagem" class="form-control border border-dark" accept="image/jpeg,image/png,image/webp" required>
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-5">

            <label for="turno" class="form-label fs-4 mb-0">
                Selecione o turno:
            </label>

            <select
                name="turno"
                id="turno"
                class="form-select w-50 border border-dark"
                required
            >
                <option value="">Selecione um turno</option>
                <option value="medio_9">Ensino médio e 9º ano</option>
                <option value="fundamental">Ensino fundamental I e II</option>
                <option value="senai">Senai</option>
            </select>

        </div>

        <div class="text-center mt-5">
            <button type="submit" class="btn btn-danger rounded-4 fs-3 px-4">
                Salvar
            </button>
        </div>

    </div>

</div>

@endsection
