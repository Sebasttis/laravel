<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StaffsController;
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
    return view('formulario');
});
Route::get('/formularioProducto',[ProductsController::class,'create']);
Route::post('/crearProducto',[ProductsController::class,'store'])->name('product.store');

Route::get('/', function () {
    return view('formulario2');
});
Route::get('/formularioProducto2',[ClientsController::class,'create2']);
Route::post('/crearProducto2',[ClientsController::class,'store2'])->name('product2.store');
Route::get('/', function () {

    return view('formulario3');
});

Route::get('/formularioProducto3',[EmployeesController::class,'create3']);
Route::post('/crearProducto3',[EmployeesController::class,'store3'])->name('product3.store');