@extends('master')

@section('content')
<a href="{{ route('produtos.create') }}">Cadastrar Novo Produto</a>
<hr>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Produtos') }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark ">
                            <th class="text-center">Nome</th>
                            <th class="text-center">Valor</th>
                            <th class="text-center">Estoque</th>
                            <th class="text-center">Marca</th>
                            <th class="text-center">Ações</th>

                            </thead>
                            <tbody>
                            @foreach($produtos as $produto)
                                <tr>
                                   
                                        <td>
                                            {{ $produto->nome }}
                                        </td>
                                        <td>
                                            {{ $produto->valor }}
                                        </td>
                                        <td class="text-center">
                                            <span class="text-bg-warning rounded-4 px-2">
                                                {{ $produto->estoque }}
                                            </span>
                                        </td>
                                        <td>
                                            {{ $produto->marca->nome }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('produtos_edit', $produto->id) }}">Editar</a>
                                            <a href="{{ route('produtos', $produto->id) }}">Deletar</a>

                                        </td>
                                        
                                   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection