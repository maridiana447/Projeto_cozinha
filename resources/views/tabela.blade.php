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
        </tr>
    </thead>
    <tbody>
        @foreach($dados as $d)
        <tr>
        <td>{{ $d['nome']}}</td>
        <td>{{ $d['email']}}</td>
        <td>{{ $d['cargo']}}</td>
        <td>{{ $d['nif']}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection