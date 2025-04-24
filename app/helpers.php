<?php
    
    if (!function_exists('trans_db')) {
        function trans_db(string $key): string
        {
            $locale = app()->getLocale();
            $translation = \App\Models\Translation::where('key', $key)->first();
            return $translation?->value[$locale] ?? __($key);
        }
    }
