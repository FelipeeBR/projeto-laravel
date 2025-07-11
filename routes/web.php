<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gado', [App\Http\Controllers\GadoController::class, 'index'])->name('gado.index');
Route::get('/gado/show/{codigo}', [App\Http\Controllers\GadoController::class, 'show'])->name('gado.show');
Route::get('/gado/create', [App\Http\Controllers\GadoController::class, 'create'])->name('gado.create');
Route::post('/gado', [App\Http\Controllers\GadoController::class, 'store'])->name('gado.store');
Route::get('/gado/{id}/edit', [App\Http\Controllers\GadoController::class, 'edit'])->name('gado.edit');
Route::put('/gado/{id}', [App\Http\Controllers\GadoController::class, 'update'])->name('gado.update');
Route::delete('/gado/{id}', [App\Http\Controllers\GadoController::class, 'destroy'])->name('gado.destroy');

Route::get('/gado/abate', [App\Http\Controllers\GadoController::class, 'abate'])->name('gado.abate');

require __DIR__.'/auth.php';
