<?php

use App\Http\Controllers\MainController;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/events/{event}', [MainController::class, 'show'])->name('event.details');
Route::get('admin/login', function () {
    return view('filament::auth.login');
})->name('filament.auth.login');

Route::post('admin/login', [Filament::class, 'handleLogin'])->name('filament.auth.login.post');
