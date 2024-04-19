<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MarcaController;
use App\Models\Marca;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('produtos', [ProdutoController::class,"index"]);
Route::get('produto/{id}', [ProdutoController::class,"show"]);
Route::post('produtos',[ProdutoController::class, "store"]);
Route::put('produtos/{id}',[ProdutoController::class, "update"]);
Route::delete('produtos/{id}',[ProdutoController::class, "delete"]);

Route::get('marcas', [MarcaController::class,"index"]);
Route::get('marca/{id}', [MarcaController::class,"show"]);
Route::post('marcas',[MarcaController::class, "store"]);
Route::put('marcas/{id}',[MarcaController::class, "update"]);
Route::delete('marcas/{id}',[MarcaController::class, "delete"]);