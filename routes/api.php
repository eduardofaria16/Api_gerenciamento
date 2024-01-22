<?php

use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('produtos', [ProdutoController::class,"index"]);
Route::get('produto/{id}', [ProdutoController::class,"show"]);
Route::post('produtos',[ProdutoController::class, "store"]);
Route::put('produtos/{id}',[ProdutoController::class, "update"]);
Route::delete('produtos/{id}',[ProdutoController::class, "delete"]);
