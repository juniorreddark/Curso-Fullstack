<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\cometarioController;
use App\Http\Controllers\postagencontroller;
use App\Http\Controllers\UserContoller;

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

Route::get('/cometarios', [cometarioController::class,'index'])->name('cometarios.index');
Route::get('/cometarios_salvar', [cometarioController::class, 'create'])->name('cometarios.create');
Route::get('/cometarios/editar/{id}', [cometarioController::class, 'edit'])->name('cometarios.edit');
Route::post('cometarios', [cometarioController::class, 'store'])->name('cometarios.store');
Route::delete('cometarios/{id}', [cometarioController::class, 'destroy'])->name('cometarios.destroy');
Route::put('/cometarios/{id}', [cometarioController::class, 'update'])->name('cometarios.update');
Route::get('/cometarios/{id}', [cometarioController::class, 'show'])->name('cometarios.show');

Route::get('/postagens', [postagencontroller::class, 'index'])->name('postagens.index');
Route::get('/postagencons_salvar', [postagencontroller::class, 'create'])->name('postagens.create');
Route::get('/postagens/editar/{id}', [postagencontroller::class, 'edit'])->name('postagens.edit');
Route::post('/postagens', [postagencontroller::class, 'store'])->name('postagens.store');
Route::delete('/postagens/{id}', [postagencontroller::class, 'destroy'])->name('postagens.destroy');
Route::put('/postagens/{id}', [postagencontroller::class, 'update'])->name('postagens.update');
Route::get('/postagens/{id}', [postagencontroller::class, 'show'])->name('postagens.show');

Route::get('/Users', [UserContoller::class, 'index'])->name('Users.index');
Route::get('/Users_salvar', [UserContoller::class, 'create'])->name('Users.create');
Route::get('Users/editar/{id}', [UserContoller::class, 'edit'])->name('Users.edit');
Route::post('/Users', [UserContoller::class, 'store'])->name('Users.store');
Route::delete('Users/{id}', [UserContoller::class, 'destroy'])->name('Users.destory');
Route::put('Users/{id}', [UserContoller::class, 'update'])->name('Users.update');
Route::get('Users/{id}', [UserContoller::class, 'show'])->name('Users.show');

