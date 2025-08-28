<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;


Route::get('/', [SiteController::class, 'home'])->name('site.principal');
Route::get('/sobre-nos', [SiteController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/como-funciona', [SiteController::class, 'comoFunciona'])->name('como-funciona');

Route::get('/contato', [ContactController::class, 'create'])->name('site.contato');
Route::post('/contato', [ContactController::class, 'store'])->name('contato.store');