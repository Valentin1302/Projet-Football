<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChampionnatController;
use App\Http\Controllers\EquipeController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::redirect('/', '/login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');


    // Championnat routes
    Route::get('/championnats', [ChampionnatController::class, 'index'])->name('championnats');
    Route::get('/championnats/create', [ChampionnatController::class, 'create'])->name('championnats.create');
    Route::post('/championnats', [ChampionnatController::class, 'store'])->name('championnats.store');
    Route::get('/championnats/{championnat}', [ChampionnatController::class, 'show'])->name('championnats.show');
    Route::get('/championnats/edit/{championnat}', [ChampionnatController::class, 'edit'])->name('championnats.edit');
    Route::patch('/championnats/update/{championnat}', [ChampionnatController::class, 'update'])->name('championnats.update');
    Route::delete('/championnats/{championnat}', [ChampionnatController::class, 'destroy'])->name('championnats.destroy');


    // Equipes routes

    Route::get('/equipes', [EquipeController::class, 'index'])->name('equipes');
    Route::get('/equipes/create', [EquipeController::class, 'create'])->name('equipes.create');
});
