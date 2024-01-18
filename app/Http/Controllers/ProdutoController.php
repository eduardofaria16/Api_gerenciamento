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

       Produto::create([
        'nome' => $req->nome,
        'valor'=> $req->valor,
        'estoque'=> $req->estoque,
        'id_marca'=> $req->id_marca,
        'id_cidade'=> $req->id_cidade,
       ]);

    
    }
}                                  

