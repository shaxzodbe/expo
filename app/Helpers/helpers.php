<?php

use App\Models\Translation;
use Illuminate\Support\Facades\Session;

if (! function_exists('translation')) {
    function translation(string $key): string
    {
        $locale = Session::get('locale', config('app.locale'));
        $translation = Translation::where('key', $key)->first();

        return $translation?->getTranslation('value', $locale) ?? __($key);
    }
}
