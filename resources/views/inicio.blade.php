@extends('layout.principal')

@section('title', 'Cadastro de aluno')

@section('content')

    <div class="row h-100 g-0">
        <div class="col-md-6 d-flex flex-column align-items-start justify-content-center">
            <span class="badge bg-white text-danger rounded-pill px-3 py-2 fw-bold" style="margin-left: 50px">
                SABORES QUE ENSINAM
            </span>
            <h1 class="text-white mt-4" style="text-align: left; margin-left: 50px">Comer bem pode <br>ser simples e <br>
                fácil, depende <br>
                apenas de você.</h1>
            <p class="text-white mt-2 text-align: left" style="margin-left: 50px">Descubra dicas de alimentação feitas pela
                nutricionista escolar
                <br>
                para garantir
                refeições adequadas e balanceadas.
            </p>
            <a href="#" class="btn btn-light text-danger rounded-pill px-4 py-2 fw-bold" style="margin-left: 50px">
                Explorar dicas
            </a>
            <h2 class="text-white mt-5" style="text-align: left; margin-left: 50px">__ <br>O que deseja ver?</h2>
            <p class="text-white text-align: left" style="margin-left: 50px">Utilize das ferramentas do nosso site pensadas
                para você!</p>
        </div>
        <div class="col-md-6 d-flex flex-column align-items-start">

            
            <img src="{{ asset('inicio.png') }}" alt=""
                style="width: 650px; height: auto; align-self: end; margin-right: 130px;">

            <div class="d-flex gap-4" style="margin-top: 40px;">

                <div class="card" style="width: 330px; height: 180px;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="{{ asset('fogo.png') }}" alt="Cardápio" class="card-img-top mb-3"style="width: 45px; height: auto;">
                            <img src="{{ asset('play.png') }}" alt="play" class="card-img-top mb-3"style="width: 25px; height: auto; align-self: end;">
                        </div>
                        <p class="card-text justify-content-end" style="margin-top: 30px">
                                Cardápio semanal
                        </p>
                    </div>
                </div>

                <div class="card" style="width: 330px; height: 180px;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="{{ asset('ideia.png') }}" alt="Dicas" class="card-img-top mb-3"style="width: 45px; height: auto;">
                            <img src="{{ asset('play.png') }}" alt="play" class="card-img-top mb-3" style="width: 25px; height: auto; align-self: end;">
                        </div>
                        <p class="card-text justify-content-end" style="margin-top: 30px">
                            Dicas de alimentação
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
