<?php

namespace App\Http\Controllers;


use App\Models\Marca;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){


        return view('marcas', ['marcas' => Marca::all()]);

    }

    public function edit( Marca $id ){

      return view('marcas_edit', ['marcas' => $id ]);

    }
    public function show( Marca $id){

        return  view('marcas_show',['marcas' =>$id]);


    }


    public function create(){ 

        return view('marcas_create');

    }
    public function store(Request $request)
{
    $marca = new Marca(); // 
    $marca->nome = $request->input('nome'); 
    $marca->save(); 

    return redirect()->route('produtos');

    }
    
    public function update(Request $req)
    {
         $marca = Marca::find($req->id);
         $marca->nome = $req->nome;
       
            $marca->save();

    }
            public function delete( $id)
            {
//
                 Marca::destroy($id);
                 return redirect()->route('produtos');
        
} }

