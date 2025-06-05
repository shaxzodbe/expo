<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index(Request $request, string $locale): RedirectResponse
    {
        $availableLocales = ['en', 'ru', 'uz'];

        if (! in_array($locale, $availableLocales)) {
            abort(400, 'Invalid locale.');
        }

        Session::put('locale', $locale);
        Log::info('Stored locale in session: '.Session::get('locale'));

        return redirect()->back();
    }
}
