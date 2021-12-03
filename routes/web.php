<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home1Controller;
use App\Http\Controllers\ProductoController;


Route::get('/', Home1controller::class);

Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/vista', [ProductoController::class, 'mostrar']);
Route::get('productos/compra', [ProductoController::class, 'comprar']);
Route::get('productos/promociones', [ProductoController::class, 'promocion']);