<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    public function index(string $locale): RedirectResponse
    {
        $availableLocales = ['en', 'ru', 'uz'];

        if (! in_array($locale, $availableLocales)) {
            abort(400, 'Invalid locale.');
        }

        session(['locale' => $locale]);
        app()->setLocale($locale);

        return redirect()->back();
    }
}
