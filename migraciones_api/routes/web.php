<?php

use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#ruta para obtener todos los proveedores y mandarlos en un json
Route::get('/proveedores', [ProveedoresController::class, 'getProveedores']);

#ruta para guardar un proveedor
Route::post('/guardar_proveedor', [ProveedoresController::class, 'registrar']);

/** @csfr => token de autorizacion */