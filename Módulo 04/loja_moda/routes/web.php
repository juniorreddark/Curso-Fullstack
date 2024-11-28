<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AvaliacoeController;
use App\Http\Controllers\Itens_PedidoController;
use App\Http\Controllers\publicacaoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/produtos',[produtoController::class,'index'])->name('produtos.index');
Route::get('/produtos_salvar',[produtoController::class,'create'])->name('produtos.create');
Route::get('produtos/editar/{id}',[produtoController::class,'edit'])->name('produtos.edit');
Route::post('/produtos',[produtoController::class,'store'])->name('produtos.store');
Route::delete('/produtos/{id}',[produtoController::class,'destroy'])->name('produtos.destroy');
Route::put('/produtos/{id}', [produtoController::class,'update'])->name('produtos.update');
Route::get('/produtos/{id}', [produtoController::class,'show'])->name('produtos.show');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias_salvar', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');



Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos_salvar', [PedidoController::class, 'create'])->name('pedidos.create');
Route::get('pedidos/editar/{id}', [PedidoController::class, 'edit'])->name('pedidos.edit');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::get('pedidos/{id}', [PedidoController::class, 'show'])->name('pedidos.show');

Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
Route::get('/empresas/editar/{id}', [EmpresaController::class, 'edit'])->name('empresas.edit');
Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresas.store');
Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');
Route::put('empresas/{id}', [EmpresaController::class, 'update'])->name('empresas.update');
Route::get('pedidos/{id}', [EmpresaController::class, 'show'])->name('empresas.show');

Route::get('/avaliacoes', [AvaliacoeController::class, 'index'])->name('avaliacoes.index');
Route::get('/avaliacoes_salvar', [AvaliacoeController::class, 'create'])->name('avaliacoes.create');
Route::get('avaliacoes/editar/{id}', [AvaliacoeController::class, 'edit'])->name('avaliacoes.edit');
Route::post('/avaliacoes', [AvaliacoeController::class, 'store'])->name('avaliacoes.store');
Route::delete('/avaliacoes/{id}', [AvaliacoeController::class, 'destroy'])->name('avaliacoes.destroy');
Route::put('/avaliacoes/{id}', [AvaliacoeController::class, 'update'])->name('avaliacoes.update');
Route::get('/avaliacoes/{id}', [AvaliacoeController::class, 'show'])->name('avaliacoes.show');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('users_salvar', [UserController::class, 'create'])->name('users.create');
Route::get('users/editar/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users', [UserController::class,'store'])->name('users.store');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/itens_pedidos', [Itens_PedidoController::class, 'index'])->name('itens_pedidos.index');
Route::get('/itens_pedidos_salvar', [Itens_PedidoController::class, 'create'])->name('itens_pedidos.create');
Route::get('/itens_pedidos/editar/{id}', [Itens_PedidoController::class, 'edit'])->name('itens_pedidos.edit');
Route::post('/itens_pedidos', [Itens_PedidoController::class, 'store'])->name('itens_pedidos.store');
Route::delete('/itens_pedidos/{id}', [Itens_PedidoController::class, 'destroy'])->name('itens_pedidos.destroy');
Route::put('/itens_pedidos/{id}', [Itens_PedidoController::class, 'update'])->name('itens_pedidos.update');
Route::get('/itens_pedidos/{id}', [Itens_PedidoController::class, 'show'])->name('itens_pedidos.show');

Route::get('/publicacaos', [publicacaoController::class,'index'])->name('publicacaos.index');
Route::get('/publicacaos_salvar', [publicacaoController::class, 'create'])->name('publicacaos.create');
Route::get('/publicacaos/editar/{id}', [PublicacaoController::class, 'edit'])->name('publicacaos.edit');
Route::post('/publicacaos', [publicacaoController::class, 'store'])->name('publicacaos.store');
Route::delete('/publicacaos/{id}', [publicacaoController::class, 'destroy'])->name('publicacaos.destroy');
Route::put('/publicacaos/{id}', [publicacaoController::class, 'update'])->name('publicacaos.update');
Route::get('/publicacaos/{id}', [publicacaoController::class, 'show'])->name('publicacaos.show');



Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

