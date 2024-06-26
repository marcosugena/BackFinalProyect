<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\Detalle_CompraController;
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
Route::post('register', [UserController::class, 'register']);
Route::post('createcompra', [CompraController::class, 'CreateCompra']);
Route::post('createdetailcompra', [Detalle_CompraController::class, 'CreateDetalleCompra']);
Route::post('createadmin', [UserController::class, 'CreateAdmin']);
Route::post('createproduct', [ProductoController::class, 'CreateProduct']);
Route::post('guardar-imagen', [ProductoController::class, 'guardarImagen']);
Route::post('es-admin', [UserController::class, 'esAdmin']);
Route::post('login',[UserController::class, 'login']);
Route::post('search',[ProductoController::class,'ObtenerBusqueda']);
Route::post('viewproductid',[ProductoController::class,'ObtenerProductoPorId']);
Route::get('deleteproduct/{id}', [ProductoController::class, 'DeleteProduct']);
Route::get('damecompras/{id}', [CompraController::class, 'DevuelveCompra']);
Route::get('dameprs/{id}', [Detalle_CompraController::class, 'DevuelveProducts']);
Route::get('deleteuser/{id}', [UserController::class, 'DeleteUser']);
Route::put('updateproduct/{id}', [ProductoController::class, 'UpdateProduct']);