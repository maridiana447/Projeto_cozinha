@extends('layout.principal')
@section('fundo', '#fcf7f7')

@section('content')
    <div class="container-fluid px-4 py-3">
        <div class="row align-items-center g-3 mb-3">
            <div class="col-12 col-md-4">
                <select class="form-select w-auto" aria-label="Filtrar por categoria">
                    <option selected>Categoria</option>
                    <option value="1">Frutas e verduras</option>
                    <option value="2">Proteínas</option>
                    <option value="3">Hidratação</option>
                    <option value="4">Lanches saudáveis</option>
                </select>
            </div>

            <div class="col-12 col-md-4 text-md-center">
                <h1 class="h3 fw-medium mb-0">Dicas de alimentação</h1>
            </div>

            <div class="col-12 col-md-4 text-md-end">
                <a href="#"
                    class="link-danger fw-medium link-underline-opacity-0 link-underline-opacity-100-hover">Adicionar
                    nova dica</a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <div class="col">
                <div class="card h-100 text-white border-0 rounded-5" style="background-color: #bd2323">
                    <div class="card-body p-4 py-5">
                        <h2 class="h5 card-title text-center mb-4">Título</h2>
                        <p class="card-text fs-5">Descrição contendo a dica</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 text-white border-0 rounded-5"style="background-color: #bd2323">
                    <div class="card-body p-4 py-5">
                        <h2 class="h5 card-title text-center mb-4">Título</h2>
                        <div class="ratio ratio-16x9 bg-secondary-subtle">
                            <img src="" alt="Imagem carregada" class="object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 text-white border-0 rounded-5" style="background-color: #bd2323">
                    <div class="card-body p-4 py-5"></div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 text-white border-0 rounded-5" style="background-color: #bd2323">
                    <div class="card-body p-4 py-5"></div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 text-white border-0 rounded-5" style="background-color: #bd2323">
                    <div class="card-body p-4 py-5"></div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 text-white border-0 rounded-5" style="background-color: #bd2323">
                    <div class="card-body p-4 py-5"></div>
                </div>
            </div>

        </div>
    </div>
@endsection
