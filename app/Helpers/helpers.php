<?php

use App\Models\Translation;

if (! function_exists('translation')) {
    function translation(string $key): string
    {
        $locale = app()->getLocale();
        $translation = Translation::where('key', $key)->first();

        return $translation?->getTranslation('value', $locale) ?? __($key);
    }
}
