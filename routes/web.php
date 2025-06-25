<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('site.principal');
Route::get('/sobre-nos', [SiteController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/como-funciona', [SiteController::class, 'comoFunciona'])->name('como-funciona');
