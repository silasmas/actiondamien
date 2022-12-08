<?php

if (!function_exists("formatNumber")) {
    function formatNumber($number)
    {
        if (app()->getLocale() !== 'en') {
            return number_format($number, 0, ',', ' ');

        } else {
            return number_format($number, 0, '.', ',');
        }
    }
}

?>
