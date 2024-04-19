<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MarcaController;
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

{
  Route::get('/marcas', [MarcaController::class, "index"])
  ->name('marcas');
}
{
  Route::get('/marcas/create',[MarcaController::class, "create"])
  ->name('marcas.create');
}
{
  Route::post('/marcas',[MarcaController::class, "store"])
  ->name('marcas.store');
}
{
  Route::get('/marcas/{id}',[MarcaController::class, "show"])
  ->name('marcas_show');
}
{
   Route::get('marcas/{id}/edit',[MarcaController::class, "edit"])
   ->name('marcas_edit');
 }
{
  Route::put('marcas/{id}',[MarcaController::class, "update"])
  ->name('marcas.update');
 }
 {
  Route::delete('/marcas/{id}',[MarcaController::class, "destroy"])
  ->name('marcas_destroy');
}
