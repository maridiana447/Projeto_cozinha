@extends('layout.principal')

@section('fundo', '#fcf7f7')
@section('title', 'Marcar presença')

@section('content')

<div class="container d-flex justify-content-center py-4">

    <div class="rounded-5 p-4"
         style="background-color: #EBAEAE; width: 100%; max-width: 1100px;">

        <div class="row align-items-center g-3 mb-2">

            <div class="col-md-6">
                <div class="d-flex align-items-center gap-2">
                    <label for="modalidade" class="form-label text-nowrap mb-0">
                        Selecione a modalidade:
                    </label>

                    <select class="form-select form-select-sm"
                            id="modalidade" name="modalidade">
                        <option value="academia">Academia</option>
                        <option value="robotica">Robótica</option>
                        <option value="personaliza">Personaliza</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-center gap-2">
                    <label for="data" class="form-label text-nowrap mb-0">
                        Insira a data:
                    </label>

                    <input type="date" class="form-control form-control-sm"
                           id="data" name="data"
                           value="2026-06-22">
                </div>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="d-flex align-items-center gap-2">
                    <label for="refeicao" class="form-label text-nowrap mb-0">
                        Selecione a refeição:
                    </label>

                    <select class="form-select form-select-sm"
                            id="refeicao" name="refeicao">
                        <option value="almoco">Almoço</option>
                        <option value="cafe">Café da manhã</option>
                        <option value="jantar">Jantar</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="d-flex rounded-4 overflow-hidden"
                 style="background-color: #F8DADA; width: 80%; min-height: 280px;">

                <div class="flex-grow-1" style="width: 75%;">
                    <div class="text-center py-3">Nome</div>

                    <div class="py-3 ps-5">Mariana de Paula Moraes</div>
                    <div class="py-3 ps-5">Victor Hugo de Barros Almeida Ferreira</div>
                </div>

                <div class="border-start border-danger-subtle text-center" style="width: 25%;">
                    <div class="py-3">Presença</div>

                    <div class="py-3">
                        <span class="rounded-2 px-1" style="background-color: #B8F5A8;">
                            Presente
                        </span>
                    </div>
                    <div class="py-3">
                        <span class="rounded-2 px-1" style="background-color: #D8D0D0;">
                            Presente
                        </span>
                    </div>
                </div>

            </div>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <button type="submit" class="btn rounded-3 px-3 py-0 fs-3"
                    style="background-color: #D71920; color: #241313;">
                Salvar
            </button>
        </div>

    </div>
</div>

@endsection