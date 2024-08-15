<?php
use Illuminate\Support\Facades\Validator;
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

if (!function_exists("valide")) {
    function valide($val)
    {
        $dateStr = $val;

        $validator = Validator::make(['date' => $dateStr], [
            'date' => 'required|date_format:d-m-Y|before_or_equal:today',
        ]);

        if ($validator->fails()) {
            return false;
        } else {
          return true;
        }
    }

}
