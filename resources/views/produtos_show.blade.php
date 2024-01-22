@extends('master')

@section('content')

    <h2>
        Excluir
    </h2>

    <form action="{{route('produtos_destroy',['id' => $produto->id ]) }}" method="post">


    @csrf
    <input type="hidden" name="_method" value="delete">
        <label for="inputNome">Nome</label>
        <input type="text" name=" nome" value="{{$produto->nome}}" readonly>
        <label for="inputNome">Valor</label>
        <input type="int" name="valor" value="{{$produto->valor}}"readonly>
        <label for="inputNome">Estoque</label>
        <input type="int" name="estoque" value="{{$produto->estoque}}"readonly>

        <button type="submit">Deletar</button>

</form>


@endsection
