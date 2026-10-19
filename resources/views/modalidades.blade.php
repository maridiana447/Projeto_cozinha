@extends('layout.principal')
@section('fundo', '#f8dada')
@section('title', 'Presenças de alunos')

@section('content')

<div class="container-fluid px-4">

    <div class="row align-items-center mb-4 g-3 d-flex justify-content-between">

        <div class="col-md-3">
            <input type="text" class="form-control w-75" placeholder="Pesquisar modalidades...">
        </div>

        <div class="col-md-4 text-end">
            <a href="#" class="text-danger text-decoration-none">
                Adicionar novo aluno
            </a>
        </div>

        <div class="col-md-5 text-end">
            <a href="#" class="text-danger text-decoration-none">
                Adicionar nova modalidade
            </a>
        </div>

    </div>

    {{-- Cards centralizados e menos largos --}}
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">

            <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

                <div class="row text-center fst-italic">
                    <div class="col-6">Modalidade</div>
                    <div class="col-6">Quantidade de alunos</div>
                </div>

                <div class="row text-center align-items-center mt-3">
                    <div class="col-6 fst-italic">
                        <div class="fs-4">Academia</div>
                        <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                            Ver alunos
                        </button>
                    </div>
                    

                    <div class="col-6 fst-italic">
                        <div class="fs-4">2</div>
                        <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                            Ver alunos
                        </button>
                    </div>
                </div>

            </div>

            <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

                <div class="row text-center fst-italic">
                    <div class="col-6">Modalidade</div>
                    <div class="col-6">Quantidade de alunos</div>
                </div>

                <div class="row text-center align-items-center mt-3">
                    <div class="col-6 fst-italic">
                        <div class="fs-4">Robótica</div>
                        <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                            Ver alunos
                        </button>
                    </div>

                    <div class="col-6 fst-italic">
                        <div class="fs-4">7</div>
                        <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                            Ver alunos
                        </button>
                    </div>
                </div>

            </div>

            <div class="card border-0 rounded-4 p-2 mb-2" style="background-color: #EBAEAE">

                <div class="row text-center fst-italic">
                    <div class="col-6">Modalidade</div>
                    <div class="col-6">Quantidade de alunos</div>
                </div>

                <div class="row text-center align-items-center mt-3">
                    <div class="col-6 fst-italic">
                        <div class="fs-4">Personaliza</div>
                        <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                            Ver alunos
                        </button>
                    </div>

                    <div class="col-6 fst-italic">
                        <div class="fs-4">15</div>
                        <button class="btn btn-danger border border-dark mt-2 py-0 fst-italic">
                            Ver alunos
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection