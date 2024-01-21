<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        

        return view('produtos', ['produtos' => Produto::all()]);

    }

    public function edit( Produto $id ){

      return view('produtos_edit', ['produto' => $id ]);
    
    }
    public function show( Request $req){

        return  Produto::findOrFail($req->id);

 
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
           
         $produto = Produto::find($req->id);

        $produto->nome = $req->nome;
        $produto->valor = $req->valor;
        $produto->estoque = $req->estoque;
            $produto->save();
            
            if ($produto){
                return redirect()->route('produtos')->with('success','Atualizado');
            }
            return redirect()->route('produtos')->with('error','Erro');
            
    }
            public function delete(Request $req)
            {
                $produto = Produto::find($req->id); $produto->delete();
                 return response ("Produto apagado");
} }

