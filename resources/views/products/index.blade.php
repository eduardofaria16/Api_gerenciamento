



@section('content')
    <div class="container">
        <h1>Estoque de Produtos</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Cidade</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->marca->nome_marca }}</td>
                    <td>{{ $product->cidade->nome_cidade }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
