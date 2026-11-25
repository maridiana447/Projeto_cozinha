@extends('layout.principal')
@section('title', 'Tabela')
@section('fundo', '#BD2323')
@section('content')

    <h2 class="text-center text-white mb-3">Tabela de funcionários</h2>
    <div class="border rounded-3 overflow-auto">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">NIF</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $d)
                    <tr>
                        <td>{{ $d['nome'] }}</td>
                        <td>{{ $d['email'] }}</td>
                        <td>{{ $d['cargo'] }}</td>
                        <td>{{ $d['nif'] }}</td>
                        <td>
                            @if (isset($d['imagem']))
                                <img src="{{ Storage::url($d['imagem']) }}" alt="imagem"
                                    style="max-width: 100px; max-height:100px;">
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="row mt-3 justify-content-center d-flex">
        @foreach ($dados as $d)
            <div class="col-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Storage::url($d['imagem']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $d['nome']}}</h5>
                        <p class="card-text">Email: {{ $d['email']}}<br>Cargo: {{ $d['cargo']}}<br>NIF: {{ $d['nif']}}</p>
                        <a href="#" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
