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


Route::get('/', [LoginController::class, 'index']);

Route::get('/artistas/cadastrar', [ArtistaController::class, 'create']);
Route::post('/artistas/cadastrar', [ArtistaController::class, 'store']);

Route::get('/artistas/editar', [ArtistaController::class, 'edit']);
Route::put('/artistas/editar', [ArtistaController::class, 'update']);

Route::get('/artistas/excluir', [ArtistaController::class, 'destroy']);

Route::get('/artistas', [ArtistaController::class, 'index'p]);