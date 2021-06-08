<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmprestimosController;
use App\Http\Controllers\LivrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/livro', LivrosController::class, ['only' => ['show']]);

Route::group(['middleware' => 'auth'], function(){
    Route::resource('/emprestimo', EmprestimoController::class);
});

// Rota index
    Route::get('/', [LivrosController::class, 'index'])->name('index');

Route::group(['middleware' => 'isAdmin'], function(){
    // Rotas Produtos
    Route::resource('/livro', LivrosController::class, ['except' => ['show']]);
    Route::get('/livros', [LivrosController::class, 'allLivros'])->name('livro.allLivros');
    Route::get('/trash/livro', [LivrosController::class, 'trash'])->name('livro.trash');
    Route::patch('/livro/restore/{ID}', [LivrosController::class, 'restoreLivro'])->name('livro.restore');
    // Rotas Categorias
    Route::resource('/category', CategoriesController::class);
    // Rotas Tags
    Route::resource('/tag', TagController::class);
});
