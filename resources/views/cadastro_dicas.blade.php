@extends('layout.principal')

@section('fundo', '#fcf7f7')

@section('title', 'Cadastro de dicas')

@section('content')

    <div class="container d-flex justify-content-center py-4">

        <div class="col-md-8 col-lg-7 rounded-5 p-5 text-white" style="background-color: #bd2323;">

            <h1 class="text-center mb-5">
                Cadastrar dica
            </h1>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">Título</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">
                    Carregue o arquivo do cardápio:
                </label>

                <input type="file" name="imagem" id="imagem" class="form-control border"
                    accept="image/jpeg,image/png,image/webp" required>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" class="form-control form-control-sm" id="text" name="text" placeholder="">
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 mt-3 mb-3">
                <label for="categoria" class="form-label text-start">Categoria:</label>
                <select name="tipo_categoria" id="categoria"
                    class="form-select w-60 border d-flex flex-column align-items-end" required>
                    <option selected> </option>
                    <option value="1">Frutas e verduras</option>
                    <option value="2">Proteínas</option>
                    <option value="3">Hidratação</option>
                    <option value="4">Lanches saudáveis</option>
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
