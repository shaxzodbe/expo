<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/events/{event}', [MainController::class, 'show'])->name('event.details');
Route::middleware(['web'])->group(function () {
    Route::get('/lang/{locale}', function ($locale) {
        if (in_array($locale, ['en', 'ru', 'uz'])) {
            App::setLocale($locale);
            session(['locale' => $locale]);
        }

        return redirect()->to(url()->previous());
    })->name('change.lang');
});
