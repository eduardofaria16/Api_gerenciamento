@extends('master')

@section('content')

<h2>Cadastrar</h2>

<form action="{{ route('marcas.store') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome da marca">

    <button type="submit">Cadastrar</button>
</form>

@endsection


