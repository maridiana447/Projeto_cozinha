@extends('layout.principal')

@section('fundo', '#f8dada')

@section('title', 'Cadastro de lote')

@section('content')

<div class="container d-flex justify-content-center">

    <div class="col-md-10 col-lg-7 rounded-5 p-5"
         style="background-color: #EBAEAE;">

        <h3 class="text-center mb-3">
            Cadastro de aluno em modalidades
        </h3>
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
            <label for="text" class="form-label">Nome</label>
            <input type="text" class="form-control form-control-sm" id="text" name="text" >
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
            <label for="text" class="form-label">Email</label>
            <input type="text" class="form-control form-control-sm" id="text" name="text">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
            <label for="text" class="form-label">Cpf</label>
            <input type="text" class="form-control form-control-sm" id="text" name="text">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
            <label for="text" class="form-label">Modalidade</label>
            <select name="turno" id="turno" class="form-select w-100 border">
                <option value=""></option>
                <option value="medio_9">Robótica</option>
                <option value="fundamental">Academia</option>
                <option value="senai">Personaliza</option>
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
