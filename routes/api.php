<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Htpp\Controllers\ProductoController;
use App\Htpp\Controllers\UserController;

Route::apiResource('categorias',CategoriaController::class);
Route::apiResource('subcategorias',SubcategoriaController::class);
Route::apiResource('productos',ProductoController::class);
Route::apiResource('usuarios',UserController::class);
