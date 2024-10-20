<?php


use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PlaygroundController;

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\SemiproductController;
use App\Http\Controllers\FinalproductController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/ingredients', IngredientController::class);
    Route::resource('/semiproducts', SemiproductController::class);
    Route::resource('/finalproducts', FinalproductController::class);
});

Route::get('/play', [PlaygroundController::class, 'index'])
    ->name('play');
Route::get('/play1', [PlaygroundController::class, 'index1'])
    ->name('play1');

require __DIR__.'/auth.php';
