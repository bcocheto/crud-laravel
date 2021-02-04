@extends('layouts.app')
@section('title', 'Alterar Cliente')
@section('content')
<form action="/atualizar/{{$cliente->id}}" method="POST">
    @csrf
    <!-- define o método como PUT pois não é suportado pelo html -->
    @method('put')
    <div class="content">
        <div class="row">
        <div class="col-25">
            <label for="codigo">Código</label>
        </div>
        <div class="col-75">
            <input type="text" id="codigo" name="codigo" value="{{$cliente->id}}" disabled="disabled">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="cnpj">CNPJ</label>
        </div>
        <div class="col-75">
            <input type="text" id="cnpj" name="cnpj" value="{{$cliente->cnpj}}" disabled="disabled">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="nome">Nome</label>
        </div>
        <div class="col-75">
            <input type="text" id="nome" name="nome" value="{{$cliente->nome}}">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="razao_social">Razão Social</label>
        </div>
        <div class="col-75">
            <input type="text" id="razao_social" name="razao_social" value="{{$cliente->razao_social}}">
        </div>
    </div>

    <div class="row">
        <input type="submit" value="Atualizar">
    </div>
    </div>
</form>
@endsection