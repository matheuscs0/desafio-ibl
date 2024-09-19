<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Crypt;

Route::get('/', function () {
    return redirect()->route('livros.index');
});



Route::get('/csrf-token', function () {
    return response()->json([
        'csrfToken' => csrf_token()
    ]);
});

// Route::get('/livros', [LivroController::class, 'index']) -> name('livros.index');
// Route::get('/livros/{livro}', [LivroController::class, 'show']);
// Route::get('/livros/criar', [LivroController::class, 'create'])->name('livros.create');

// Route::post('/livros', [LivroController::class, 'store']) -> name('livros.store');

// Route::put('/livros/{livro}', [LivroController::class, 'update']) -> name('livros.update');

// Route::delete('/livros/{livro}', [LivroController::class, 'destroy']) -> name('livros.destroy');
Route::get('/livros/search', [LivroController::class, 'search'])->name('livros.search');

Route::resource('livros', LivroController::class);

