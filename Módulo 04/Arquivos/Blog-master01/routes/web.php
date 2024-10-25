<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CometarioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\PostagemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', [PostagemController::class, 'index'])->name('postagem.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/cometarios',[CometarioController::class, 'index'])->name('cometarios.index');
Route::get('/cometarios_salvar', [CometarioController::class, 'create'])->name('cometarios.create');
Route::get('/cometarios/editar/{id}', [CometarioController::class, 'edit'])->name('cometarios.edit');
Route::post('/cometarios', [CometarioController::class,'store'])->name('cometarios.store');
Route::delete('/cometarios/{id}', [CometarioController::class, 'destroy'])->name('cometarios.destroy');
Route::put('/cometarios/{id}', [CometarioController::class, 'update'])->name('cometatios.update');
Route::get('/cometarios/{id}', [CometarioController::class, 'show'])->name('cometarios.show');




