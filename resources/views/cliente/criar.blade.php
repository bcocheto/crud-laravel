@extends('layouts.app')
@section('content')
<form action="/criar" method="POST">
@csrf
    <div class="row">
        <div class="col-25">
            <label for="nome">Nome</label>
        </div>
        <div class="col-75">
            <input type="text" id="nome" name="nome" placeholder="Seu Nome">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="razao_social">Razão Social</label>
        </div>
        <div class="col-75">
            <input type="text" id="razao_social" name="razao_social" placeholder="A razão social da empresa">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="cnpj">CNPJ</label>
        </div>
        <div class="col-75">
            <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ">
        </div>
    </div>
    <div class="row">
        <input type="submit" value="Cadastrar">
    </div>
</form>
@endsection