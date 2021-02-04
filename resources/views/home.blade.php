@extends('layouts.app')
@section('content')
<div class="container">
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
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->razao_social}}</td>
                <td>{{$cliente->cnpj}}</td>
                <td>{{$cliente->data_inclusao}}</td>
                <td><a href="/alterar/{{$cliente->id}}">Alterar</a>
                    <form action="/deletar/{{$cliente->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class='btn btn-danger' type='submit'>Deletar</button>
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
</div>
@endsection
