<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function translate($lang)
    {
        if (in_array($lang, ['it', 'en'])) {
            /**
             * @var $lang 10 years expiration
             */
            $expiration = 60 * 60 * 24 * 365 * 10;

            Cookie::queue('lang', $lang, $expiration);
        }
        return back() ?? view('home');
    }
}
