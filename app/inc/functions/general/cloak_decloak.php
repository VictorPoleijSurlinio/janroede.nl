<?php
// CLOAK / DECLOACK
function cloak($str) {
    $key = "Surl1n1oEncrypt!";
    $iv  = "Surl1n1oEncrypt!";
    $str = openssl_encrypt($str, "AES-128-CBC", $key, OPENSSL_RAW_DATA, $iv);
    return base64_encode($str);
}

function decloak($str) {
    $key = "Surl1n1oEncrypt!";
    $iv  = "Surl1n1oEncrypt!";
    $str = base64_decode($str);
    $str = openssl_decrypt($str, "AES-128-CBC", $key, OPENSSL_RAW_DATA, $iv);
    return $str;
}