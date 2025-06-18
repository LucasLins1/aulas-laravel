<?php

use App\Http\Controllers\ContatosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rota de contato
Route::get('/contatos', [ContatosController::class, 'index']) ->name('contatos.index');

//Rota delete
Route::delete('/contatos/{contatos}', [ContatosController::class, 'delete']) ->name('contatos.delete');

//Rota create - metodo get
Route::get('/contatos/create' , [ContatosController::class, 'create'])->name('contatos.create.get');

//Rota create - metodo post
Route::post('/contatos/create' , [ContatosController::class, 'create'])->name('contatos.create.post');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function() {
    return view('index');
});

Route::get('/dashboard', function () {  // tela de login
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
