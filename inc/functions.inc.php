<?php

// random string function created by Stephen Watkins
// modified for this particular project
// https://stackoverflow.com/questions/4356289/php-random-string-generator
function generate_login_key($length=128) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$&._-+';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}