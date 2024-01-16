<!-- resources/views/products/create.blade.php -->
<!-- resources/views/products/create.blade.php -->



@section('content')
    <div class="container">
        <h1>Cadastrar Produto</h1>

        <form method="POST" action="{{ route('/products/store') }}">
            @csrf

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="valor">Preço</label>
                <input type="number" name="valor" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="estoque">Estoque</label>
                <textarea name="estoque" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="id_marca">Marca</label>
                <select name="id_marca" class="form-control" required>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nome_marca }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_cidade">Cidade</label>
                <select name="id_cidade" class="form-control" required>
                    @foreach($cidades as $cidade)
                        <option value="{{ $cidade->id }}">{{ $cidade->nome_cidade }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection

