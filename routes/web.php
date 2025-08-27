<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AnimalController;

Route::get('/', [SiteController::class, 'home'])->name('site.principal');
Route::get('/sobre-nos', [SiteController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/como-funciona', [SiteController::class, 'comoFunciona'])->name('como-funciona');
Route::get('/teste-index', [AnimalController::class, 'index']);
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');


// Rota para criar novo animal
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');

// Rota para salvar o novo animal
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');

// Rota para ver detalhes de um animal
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');