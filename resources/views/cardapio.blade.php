
@extends('layout.principal')
@section('fundo', '#fcf7f7')

@section('title', 'Cardápio semanal')

@section('content')

    <div class="d-flex align-items-center gap-2">
        <p>Selecione seu turno:</p>
        <select class="form-select" style='width: 15%;'>
            <option value="">Selecione um turno</option>
            <option value="medio_9">Ensino médio e 9º ano</option>
            <option value="fundamental">Ensino fundamental I e II</option>
            <option value="senai">Senai</option>
        </select>
        <div class="ms-auto">
            <a href="#" class="text-danger text-decoration-none">
                Adicionar mais deste alimento
            </a>
        </div>
    </div>
    <img src="{{ asset('cardapio.png') }}" class="d-block mx-auto mt-4" style="width: 50%;" alt="Cardápio">
    

@endsection
