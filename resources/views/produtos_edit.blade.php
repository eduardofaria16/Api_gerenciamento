@extends('master')

@section('content')

<h2>
    Editar
</h2>

<form action="{{route('produtos.update',['id' => $produto->id ]) }}" method="post">

@csrf
<input type="hidden" name="_method" value="PUT">
<label for="inputNome">Nome</label>
<input type="text" name=" nome" value="{{$produto->nome}}">
<label for="inputNome">Valor</label>
<input type="int" name="valor" value="{{$produto->valor}}">
<label for="inputNome">Estoque</label>
<input type="int" name="estoque" value="{{$produto->estoque}}">

<button type="submit">Atualizar</button>

</form>


@endsection

