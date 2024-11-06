<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EmpresaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos',[ProdutoController::class,'index'])->name('produtos.index');
Route::get('/produtos_salvar',[ProdutoController::class,'create'])->name('produtos.create');
Route::get('produtos/editar/{id}',[ProdutoController::class,'edit'])->name('produtos.edit');
Route::post('/produtos',[ProdutoController::class,'store'])->name('produtos.store');
Route::delete('/produtos/{id}',[ProdutoController::class,'destroy'])->name('produtos.destroy');
Route::put('/produto/{id}', [ProdutoController::class,'update'])->name('produtos.update');
Route::get('/produtos/{id}', [ProdutoController::class,'show'])->name('produtos.show');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias_salvar', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('/categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

Route
