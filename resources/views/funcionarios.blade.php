@extends('layout.principal')

@section('fundo', '#fcf7f7')
@section('title', 'Presentes')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="w-100 text-end fs-4" style="max-width: 1100px;">
            <a href="#" class="text-danger text-decoration-none">
                Cadastrar novo funcionário
            </a>
        </div>
    </div>
    <div class="container d-flex justify-content-center py-4">


        <div class="rounded-5 p-5" style="background-color: #bd2323; width: 100%; max-width: 1100px;">

            <h2 class="text-center text-white mb-5">
                Funcionários
            </h2>
            <div class="d-flex justify-content-center text-white">
                <div class="d-flex rounded-4 overflow-hidden"
                    style="background-color: #bd2323; width: 80%; min-height: 280px;">

                    <div class="flex-grow-1" style="width: 75%;">
                        <div class="text-center py-3 fs-5">Nome</div>

                        <div class="py-3 ps-5">Mariana de Paula Moraes</div>
                        <div class="py-3 ps-5">Victor Hugo de Barros Almeida Ferreira</div>
                    </div>

                    <div class="border-start border-danger-subtle" style="width: 25%;">
                        <div class="py-3 text-center fs-5">NIF</div>

                        <div class="py-3 d-flex justify-content-end align-items-center gap-2">
                            <span>123456</span>
                            <button type="button" class="btn btn-sm text-danger py-0" style="background-color: #f7dadc">Excluir</button>
                        </div>

                        <div class="py-3 d-flex justify-content-end align-items-center gap-2">
                            <span>654321</span>
                            <button type="button" class="btn btn-sm text-danger py-0" style="background-color: #f7dadc">Excluir</button>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection
