<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', fn () => redirect()->route('producto'));
Route::get('/producto', [ProductoController::class, 'index'])->name('producto');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/producto',[ProductoController::class, 'store'])->name('productos.store');
Route::get('/producto/edit/', [ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/producto/update', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/producto/delete', [ProductoController::class, 'destroy'])->name('productos.destroy');


