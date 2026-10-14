@extends('layout.principal')
@section('fundo', '#fcf7f7')
@section('title', 'Marcar presença')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="col-md-10 col-lg-7 rounded-5 p-5" style="background-color: #EBAEAE;">
        <div class="d-flex align-items-center justify-content-between gap-3">
            <div class="col-lg-5  col-md-12 col-sm-12 mt-3 mb-5">
                <label for="text" class="form-label">Selecione a modalidade:</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="Digite a quantidade">
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-5">
                <label for="text" class="form-label">Insira a data:</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="Digite a validade">
            </div>
        </div>
    </div>
</div>

@endsection