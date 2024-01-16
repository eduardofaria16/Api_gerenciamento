<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use Illuminate\Http\Request;

class Cidadecontroller extends Controller
{
    public function index(Request $request)
    {
        return Cidade::all();



    }

}
