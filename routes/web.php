<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactController;

Route::get('/', [SiteController::class, 'home'])->name('site.principal');
Route::get('/sobre-nos', [SiteController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/como-funciona', [SiteController::class, 'comoFunciona'])->name('como-funciona');

Route::resource('animals', AnimalController::class);

Route::get('/contato', [ContactController::class, 'create'])->name('site.contato');
Route::post('/contato', [ContactController::class, 'store'])->name('contato.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
