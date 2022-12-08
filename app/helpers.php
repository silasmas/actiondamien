<?php

if (!function_exists("formatNumber")) {
    function formatNumber($number)
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $acceptLang = ['ln', 'fr', 'en'];
        $lang = in_array($lang, $acceptLang) ? $lang : 'en';

        if ($lang == 'en') {
            return number_format($number, 0, ',', ' ');

        } else {
            return number_format($number, 0, '.', ' ');
        }
    }

}

?>
