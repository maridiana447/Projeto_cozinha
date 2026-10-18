```php
@extends('layout.principal')

@section('fundo', '#fcf7f7')
@section('title', 'Marcar presença')

@section('content')

<div class="container d-flex justify-content-center py-4">

    <div class="rounded-5 p-4"
         style="background-color: #EBAEAE; width: 100%; max-width: 1100px;">

        {{-- Modalidade e data --}}
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

        {{-- Seleção da refeição --}}
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
            <div class="rounded-4 overflow-hidden"
                 style="background-color: #F8DADA; width: 80%; min-height: 280px;">

                <table class="table table-borderless mb-0"
                       style="color: #392525;">

                    <thead>
                        <tr>
                            <th class="text-center fw-normal py-3"
                                style="width: 75%;">
                                Nome
                            </th>

                            <th class="text-center fw-normal py-3"
                                style="border-left: 1px solid #EBAEAE;">
                                Presença
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="text-center py-3">
                                Mariana de Paula Moraes
                            </td>

                            <td class="text-center py-3"
                                style="border-left: 1px solid #EBAEAE;">
                                <span class="rounded-2 px-1"
                                      style="background-color: #B8F5A8;">
                                    Presente
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center py-3">
                                Victor Hugo de Barros Almeida Ferreira
                            </td>

                            <td class="text-center py-3"
                                style="border-left: 1px solid #EBAEAE;">
                                <span class="rounded-2 px-1" style="background-color: #D8D0D0;">
                                    Presente
                                </span>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <button type="submit" class="btn rounded-3 px-3 py-0"
                    style="background-color: #D71920; color: #241313;
                           font-size: 24px;">
                Salvar
            </button>
        </div>

    </div>
</div>

@endsection
```