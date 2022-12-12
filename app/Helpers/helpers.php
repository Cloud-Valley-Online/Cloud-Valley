<?php

use Illuminate\Foundation\Auth\User;

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('userIdToUsername')) {

    function userIdToUsername($user_id)
    {
       return User::where('id', $user_id)->pluck('name')->first();
    }
}
