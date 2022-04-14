<?php

use Illuminate\Support\Str;

    /*
    |--------------------------------------------------------------------------
    | Get the current logged admin
    |--------------------------------------------------------------------------
    |
    | Get the user informations if he's connected
    |
    */

    if (!function_exists('user')) {
        function user()
        {
            return auth()->user();
        }
    }
