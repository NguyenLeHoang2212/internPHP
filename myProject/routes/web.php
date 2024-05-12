<?php

use App\Http\Controllers\Client\StudyAbroadController;
use App\Http\Controllers\ProfileController;
use App\Models\Study_Abroad;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('client.layout.master');
// });
// Route::get('/', function () {
//     return view('client.pages.type-work');
// });
Route::get(
    '/',
    [StudyAbroadController::class, 'index']
)->name('home.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';