<?php

use Illuminate\Support\Facades\Route;

{
    Route::get('/products/store', [\App\Http\Controllers\produto::class, 'store'])->name('products.store');

    Route::get('/products', [\App\Http\Controllers\produto::class, 'index'])->name('products.index');


}
