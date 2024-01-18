<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return Produto::all();
    }


    public function store(Request $req) {


        Produto::create ([
           'nome'=>$req->nome,
           'valor'=>$req->valor,
           'estoque'=>$req->estoque,
           'id_marca'=>$req->id_marca,

            ]);
    }
    public function update(Request $req)
    {
      dd($req->all());
        $produto = Produto::find($req->id);

        $produto->nome = $req->nome;
        $produto->valor = $req->valor;
        $produto->estoque = $req->estoque;
        $produto->id_marca = $req->id_marca;

        $produto->save();

        return response("editado");
    }

}

