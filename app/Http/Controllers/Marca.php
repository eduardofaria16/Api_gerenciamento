<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class Marca extends Controller
{ public function store(Request $req) {

    Produto::create ([
        'nome'=>$req->nome,
        'fabricante'=>$req->fabricante,


    ]);

}}
