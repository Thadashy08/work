<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CategoriasController;
use App\Http\Controllers\API\SubcategoriasController;
use App\Http\Controllers\API\MarcaController;
use App\Http\Controllers\API\FormaPagoController;
use App\Http\Controllers\API\ProductoController;

Route::apiResource('categorias', CategoriasController::class);
Route::apiResource('subcategorias', SubcategoriasController::class);
Route::apiResource('marcas', MarcaController::class);
Route::apiResource('formaspago', FormaPagoController::class);
Route::apiResource('productos', ProductoController::class);