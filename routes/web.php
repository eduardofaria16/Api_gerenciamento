<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

{
  Route::get('/produtos', [ProdutoController::class, "index"])
  ->name('produtos');
}
{
  Route::get('/produtos/create',[ProdutoController::class, "create"])
  ->name('produtos.create');
}
{
  Route::post('/produtos',[ProdutoController::class, "store"])
  ->name('produtos.store');
}
{
  Route::get('/produtos/{id}',[ProdutoController::class, "show"])
  ->name('produtos_show');
}
{
   Route::get('produtos/{id}/edit',[ProdutoController::class, "edit"])
   ->name('produtos_edit');
 }
{
  Route::put('produtos/{id}',[ProdutoController::class, "update"])
  ->name('produtos.update');
 }
 {
  Route::delete('/produtos/{id}',[ProdutoController::class, "destroy"])
  ->name('produtos_destroy');
}

