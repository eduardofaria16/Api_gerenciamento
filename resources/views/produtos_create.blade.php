@extends('master')

@section('content')

<h2>
    Cadastrar
</h2>

<form action="{{route('produtos.store') }}" method="post">

@csrf
<input type="text" name=" nome" placeholder="nome">
<input type="int" name="valor" placeholder="Valor">
<input type="int" name="estoque"placeholder="Qtd em estoque">
<select name="marca" id="marca_id">
        <option value="1">Cesta</option>
        <option value="2">Cocal </option>
        <option value="3">ABC3 </option>
        
    </select>


<button type="submit">Cadastrar</button>

</form>


@endsection