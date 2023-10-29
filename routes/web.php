<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtistaController;

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


Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('/artistas/cadastrar', [ArtistaController::class, 'create'])->name('artistas.cadastrar');
Route::post('/artistas/cadastrar', [ArtistaController::class, 'store'])->name('artistas.salvar');

Route::get('/artistas/editar', [ArtistaController::class, 'edit'])->name('artistas.editar');
Route::put('/artistas/editar', [ArtistaController::class, 'update'])->name('artistas.atualizar');

Route::get('/artistas/excluir', [ArtistaController::class, 'destroy'])->name('artistas.excluir');

Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas');