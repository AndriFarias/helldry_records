<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\GrupoController;

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

    Route::get('/grupos/',[GrupoController::class, 'index'])->name('grupos');
    Route::get('/grupos/novo',[GrupoController::class, 'create'])->name('grupos.novo');
    Route::post('/grupos/novo',[GrupoController::class, 'store'])->name('grupos.store');
    Route::get('/grupos/visulizar/{id}',[GrupoController::class, 'show'])->name('grupos.visualizar');
    Route::get('/grupos/editar/{id}',[GrupoController::class, 'edit'])->name('grupos.editar');
    Route::put('/grupos/editar/{id}',[GrupoController::class, 'update'])->name('grupos.atualizar');
});
