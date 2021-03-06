@extends('layouts.app')
// propriedade responsável por alterar o nome da página
@section('title', 'Lista de Clientes')
@section('content')
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
        <tbody>
            <!-- gera uma lista de clientes a partir dos 
            dados cadastrados no banco de dados -->
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->razao_social}}</td>
                <td>{{$cliente->cnpj}}</td>
                <td>{{$cliente->data_inclusao}}</td>
                <td><a class="btn-green" href="/alterar/{{$cliente->id}}">Alterar</a>
                <!-- função de ecluir cliente implementada dentro do html -->
                    <form action="/deletar/{{$cliente->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class='btn-red' type='submit'>Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        <tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
