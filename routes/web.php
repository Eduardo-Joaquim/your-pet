<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController; // ← se já tiver seu controlador principal
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Rotas públicas (sem login)
|--------------------------------------------------------------------------
*/

// Página inicial do YourPet
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


Route::get('/contato', [ContactController::class, 'create'])->name('site.contato');
Route::post('/contato', [ContactController::class, 'store'])->name('contato.store');





// Caso você ainda não tenha o controller acima, pode usar assim:
// Route::get('/', function () {
//     return view('site.principal'); // ou o nome do seu arquivo Blade
// });

/*
|--------------------------------------------------------------------------
| Rotas protegidas (precisam de login)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Autenticação Breeze (login, register, etc.)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';