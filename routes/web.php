<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/events/{event}', [MainController::class, 'show'])->name('event.details');
Route::post('/lang/{locale}', [LanguageController::class, 'index'])
    ->name('change.lang')
    ->middleware(SetLocale::class);
