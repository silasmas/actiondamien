<?php

if (!function_exists("formatNumber")) {
    function formatNumber($number)
    {
        //  ========================================================
        //  FIRST POSSIBILITY
        //  ========================================================

        // $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        // $acceptLang = ['ln', 'fr', 'en'];
        // $lang = in_array($lang, $acceptLang) ? $lang : 'en';

        // if ($lang == 'en') {
        //     return number_format($number, 0, '.', ',');

        // } else {
        //     return number_format($number, 0, ',', ' ');
        // }

        //  ========================================================
        //  SECOND POSSIBILITY
        //  ========================================================

        // $available_locales = config('app.available_locales');
        // $current_locale = app()->getLocale();

        // foreach ($available_locales as $available_locale):
        //     if ($available_locale === $current_locale) {
        //         return number_format($number, 0, ',', ' ');

        //     } else {
        //         if ($available_locale === 'en') {
        //             return number_format($number, 0, '.', ',');

        //         } else {
        //             return number_format($number, 0, ',', ' ');
        //         }
        //     }
        // endforeach;

        //  ========================================================
        //  THIRD POSSIBILITY
        //  ========================================================

        if (app()->getLocale() !== 'en') {
            return number_format($number, 0, ',', ' ');

        } else {
            return number_format($number, 0, '.', ',');
        }
    }
}

?>
