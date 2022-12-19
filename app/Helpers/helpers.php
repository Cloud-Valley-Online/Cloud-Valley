<?php

use Illuminate\Foundation\Auth\User;

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('userIdToUsername')) {

    function userIdToUsername($user_id)
    {
        return User::where('id', $user_id)->pluck('name')->first();
    }
}

if (!function_exists('cleanString')) {
    function cleanString($string)
    {
        $string = preg_replace('/\s+/', '-', $string);
        $clean_string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

        return $clean_string;
    }
}


if (!function_exists('seperateKeywordsFromTags')) {
    function seperateKeywordsFromTags($tag)
    {
        $keyword = strtolower($tag);    //lower case
        $keyword = explode(',', $tag); //remove comma
        $keyword = preg_replace('/\s+/', '', $keyword); //remove spaces
        $keyword = preg_replace('/\W|\d/', '', $keyword); //remove numbers
        return $keyword;
    }
}
