<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\LettersTwoController;
use Illuminate\Support\Facades\View;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/letters', [LetterController::class, 'lessonOne'])->name('letters.index');
Route::get('/api/letters', [LetterController::class, 'apiList'])->name('api.letters');
Route::get('/letters/{letter}', [LetterController::class, 'show'])->name('letters.show');
Route::get('/api/letters/{letter}', [LetterController::class, 'apiShow'])->name('api.letters.show');
Route::get('/letters/{letter}/harakat/{type}', [LetterController::class, 'harakat'])
    ->where('type', 'plain|fatha|kasra|damma')
    ->name('letters.harakat');

Route::get('/letters-two', [LettersTwoController::class, 'index'])->name('letters-two.index');
Route::get('/api/letters-two', [LettersTwoController::class, 'apiList'])->name('api.letters-two');
Route::get('/letters-two/{letter}', [LettersTwoController::class, 'show'])->name('letters.show');
Route::get('/api/letters/{letter}', [LettersTwoController::class, 'apiShow'])->name('api.letters.show');
Route::get('/letters/{letter}/harakat/{type}', [LettersTwoController::class, 'harakat'])
    ->where('type', 'plain|fatha|kasra|damma')
    ->name('letters.harakat');
    
// Route for the new Arabic alphabet page for beginners
Route::get('/alphabet', [LetterController::class,'alphabet'])->name('alphabet');
