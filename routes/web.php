<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/events/{event}', [MainController::class, 'show'])->name('event.details');
Route::get('/admin/login', \Filament\Pages\Auth\Login::class);
Route::post('/admin/login', \Filament\Http\Controllers\Auth\LogoutController::class);
