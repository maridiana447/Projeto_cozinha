@extends('layout.principal')

@section('fundo', '#fcf7f7')

@section('title', 'Cadastro de alimento')

@section('content')

    <div class="container d-flex justify-content-center">

        <div class="col-md-12 col-lg-10 rounded-5 p-5" style="background-color: #EBAEAE;">

            <h2 class="text-center mb-3">
                Cadastro de alimento
            </h2>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label for="text" class="form-label">Alimento</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text"
                    placeholder="">
            </div>
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div class="col-lg-5  col-md-12 col-sm-12 mt-3 mb-3">
                    <label for="medida" class="form-label">Unidade de medida:</label>
                    <select name="tipo_medida" id="medida" class="form-select w-60 border" required>
                        <option value=""></option>
                        <option value="kg">Quilograma</option>
                        <option value="g">Grama</option>
                        <option value="l">Litro</option>
                        <option value="ml">Mililitro</option>
                    </select>
                </div>
                <div class="col-lg-5  col-md-12 col-sm-12 mt-3 mb-3">
                    <label for="categoria" class="form-label text-start">Categoria:</label>
                    <select name="tipo_categoria" id="categoria" class="form-select w-60 border d-flex flex-column align-items-end" required>
                        <option value=""></option>
                        <option value="graos">Grãos</option>
                        <option value="carnes">Carnes</option>
                        <option value="laticinios">Laticínios</option>
                        <option value="hortifruti">Hortifruti</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label for="text" class="form-label">Descrição</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text"
                    placeholder="">
            </div>
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
                    <label for="text" class="form-label">Quantidade inicial</label>
                    <input type="text" class="form-control form-control-sm" id="text" name="text"
                        placeholder="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
                    <label for="text" class="form-label">Validade</label>
                    <input type="text" class="form-control form-control-sm" id="text" name="text"
                        placeholder="">
                </div>

            </div>
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
                    <label for="text" class="form-label">Quantidade mínima</label>
                    <input type="text" class="form-control form-control-sm" id="text" name="text"
                        placeholder="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mb-3">
                    <label for="text" class="form-label">Número do lote</label>
                    <input type="text" class="form-control form-control-sm" id="text" name="text"
                        placeholder="">
                </div>

            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-danger rounded-4 fs-3 px-4">
                    Salvar
                </button>
            </div>

        </div>

    </div>

@endsection
