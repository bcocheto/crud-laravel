@extends('layouts.app')
@section('content')
<form action="/deletar/{{$cliente->id}}" method="POST">
@csrf
@method('delete')

<button class='btn btn-danger' type='submit'>Deletar</button>
</form>
@endsection