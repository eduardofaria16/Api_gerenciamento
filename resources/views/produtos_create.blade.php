@extends('master')

@section('content')

<h2>
    Cadastrar
</h2>

<form action="{{route('produtos.store') }}" method="post">

@csrf
<input type="text" name=" nome" placeholder="nome">
<input type="number" step="0.01" name="valor" placeholder="Valor">
<input type="number" name="estoque"placeholder="Qtd em estoque">
    <label for="marca" class="col-md-4 col-form-label text-md-end">{{ __('Selecione a marca') }}</label>
    <div class="col-md-6">
    <select id="marca" name="marca" class="form-select form-select-sm" aria-label=".form-select-sm example">
    @foreach($marcas as $marca)
        <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
    @endforeach
</select>

    </div>



<button type="submit">Cadastrar</button>

</form>


@endsection
