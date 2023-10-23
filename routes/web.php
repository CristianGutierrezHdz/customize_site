<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\InicioWebController;
use Illuminate\Support\Facades\Route;


Route::name('web.')->group(function () {
    Route::get('/', [InicioWebController::class, 'index'])->name('index');
});

Route::get('/dashboardd', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::prefix('dashboard')->middleware(['auth', 'verified'])->name('dashboard.')->group(function () {

    Route::get('/', [InicioWebController::class, 'index'])->name("index");
});
