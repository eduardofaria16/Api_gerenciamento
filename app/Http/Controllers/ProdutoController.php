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
    public function show( Produto $id){

        return  view('produtos_show',['produto' =>$id]);


    }


    public function create(){

        return view('produtos_create');

    }
    public function store(Request $req) {


//dd($req->marca);
        Produto::create ([
           'nome'=>$req->nome,
           'valor'=>$req->valor,
           'estoque'=>$req->estoque,
           'marca_id'=>$req->marca,

            ]);
        return redirect()->route('produtos');

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
            public function destroy( $id)
            {
//
                 Produto::destroy($id);
                 return redirect()->route('produtos');
} }

