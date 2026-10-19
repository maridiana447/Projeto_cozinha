@extends('layout.principal')

@section('fundo', '#fcf7f7')
@section('title', 'Presentes')

@section('content')

<div class="container d-flex justify-content-center py-4">

    <div class="rounded-5 p-5"
         style="background-color: #EBAEAE; width: 100%; max-width: 1100px;">

        <div class="row align-items-start g-3 mb-4">
            <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                    <span class="fw-semibold text-nowrap">Modalidade:</span>
                    <span class="text-nowrap">Academia</span>
                </div>

                <div class="d-flex align-items-center justify-content-center gap-2">
                    <span class="fw-semibold text-nowrap">Refeição:</span>
                    <span class="text-nowrap">Almoço</span>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <span class="fw-semibold text-nowrap">Data:</span>
                    <span class="text-nowrap">10/10/2026</span>
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
                        <span class="rounded-2 px-1" style="background-color: #B8F5A8;">
                            Presente
                        </span>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>

@endsection