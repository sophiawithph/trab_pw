<?php

use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuarioController;
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
    return view('welcome');
})->name('home');

Route::prefix('/usuarios')->group(function () {
    Route::get('/cadastrar', [UsuarioController::class, 'index'])->name('usuarios.index');
    Route::post('/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuarios.cadastrar');
    Route::get('/usuarios', [UsuarioController::class, 'listAll'])->name('usuarios.listAll');
    Route::get('/login', [UsuarioController::class, 'login'])->name('login');
    Route::post('/login', [UsuarioController::class, 'login'])->name('login');
    Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');
    Route::get('/createMovie', [FilmesController::class, 'index'])->name('movies.index');
    Route::post('/createMovie', [FilmesController::class, 'create'])->name('movies.create');
})->middleware('auth');

Route::get('/listMovies', [FilmesController::class, 'listAll'])->name('movies.listAll');
Route::get('/listMovie/{movieId}', [FilmesController::class, 'listMovie'])->name('movies.listMovie');

Route::get('/edit/{id}', [FilmesController::class, 'edit'])->name('movies.edit');
Route::post('/edit/{id}', [FilmesController::class, 'editSave'])->name('movies.editSave');

Route::get('/remove/{id}', [FilmesController::class, 'remove'])->name('movies.remove');
Route::delete('/remove/{id}', [FilmesController::class, 'removeForReal'])->name('movies.removeForReal');

Route::post('/filter', [FilmesController::class, 'filter'])->name('movies.filter');
