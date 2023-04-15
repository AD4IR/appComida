<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ruta para obtener las categorias
Route::get('categorias',[CategoryController::class,'getCategorias']);
Route::post('nuevaCategoria',[CategoryController::class,'postCategory']);

Route::post('nuevoProducto',[productController::class,'postProduct']);
Route::get('productos',[productController::class,'getProductos']);

Route::delete('productos/{id}',[productController::class,'delProduct']);
Route::get('productos/{id}',[productController::class,'getProduct']);

Route::put('productos/{id}',[productController::class,'putProduct']);