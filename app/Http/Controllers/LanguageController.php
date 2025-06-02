<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request, $locale): RedirectResponse
    {
        $availableLocales = ['en', 'ru', 'uz'];

        if (! in_array($locale, $availableLocales)) {
            abort(400);
        }
        app()->setLocale($locale);
        session(['locale' => $locale]);

        return redirect()->back();
    }
}
