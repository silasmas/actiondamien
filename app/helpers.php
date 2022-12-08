<?php

use Illuminate\Support\Facades\Session;

if (!function_exists("formatNumber")) {
    function formatNumber($number)
    {
        if (Session::has('locale')) {
            $sessionLocale = Session::get('locale');

            if ($sessionLocale !== 'en') {
                return number_format($number, 0, ',', ' ');

            } else {
                return number_format($number, 0, '.', ',');
            }

        } else {
            if (app()->getLocale() !== 'en') {
                return number_format($number, 0, ',', ' ');

            } else {
                return number_format($number, 0, '.', ',');
            }
            return number_format($number, 0, '.', ' ');
        }
    }

}
