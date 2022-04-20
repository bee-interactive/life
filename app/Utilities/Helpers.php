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

    /*
    |--------------------------------------------------------------------------
    | Flash session helper
    |--------------------------------------------------------------------------
    |
    | Generate the flash message helper
    |
    */

    if (!function_exists('flash')) {
        function flash(array $attributes = []) : void
        {
            session()->flash('flash', $attributes);
        }
    }
