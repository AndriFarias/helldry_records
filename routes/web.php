<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtistaController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store'])->name('login.verificar');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/artistas/cadastrar', [ArtistaController::class, 'create'])->name('artistas.cadastrar');
    Route::post('/artistas/cadastrar', [ArtistaController::class, 'store'])->name('artistas.salvar');

    Route::get('/artistas/visulizar/{id}', [ArtistaController::class, 'show'])->name('artistas.visualizar');

    Route::get('/artistas/editar/{id}', [ArtistaController::class, 'edit'])->name('artistas.editar');
    Route::put('/artistas/editar/{id}', [ArtistaController::class, 'update'])->name('artistas.atualizar');

    Route::get('/artistas/excluir/{id}', [ArtistaController::class, 'destroy'])->name('artistas.excluir');

    Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas');
});
