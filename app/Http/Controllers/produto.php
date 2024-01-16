<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use Illuminate\Http\Request;

class produto extends Controller
{
    public function create()
    {
        $marcas = \App\Models\Marca::all();
        $cidades = Cidade::all();

        return view('products.create', compact('marcas', 'cidades'));
    }
       public function store(Request $request)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'valor' => 'required|numeric',
        'id_marca' => 'required|exists:marcas,id',
        'id_cidade' => 'required|exists:cidades,id',
        'estoque' => 'nullable|string',
    ]);

    \App\Models\Produto::create([
        'name' => $request->input('name'),
        'valor' => $request->input('price'),
        'id_marca' => $request->input('marca_id'),
        'id_cidade' => $request->input('cidade_id'),
        'estoque' => $request->input('estoque'),
    ]);
    return redirect()->route('products.create')->with('success', 'Produto cadastrado com sucesso!');
}}
