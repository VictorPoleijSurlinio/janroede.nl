<?php
// SPIT STRAAT EN HUISNUMMER
function split_street($streetStr) {
    $aMatch         = array();
    $pattern        = '#^([\w[:punct:] ]+) ([0-9]{1,5})([\w[:punct:]\-/]*)$#';
    $matchResult    = preg_match($pattern, $streetStr, $aMatch);

    $street         = (isset($aMatch[1])) ? $aMatch[1] : '';
    $number         = (isset($aMatch[2])) ? $aMatch[2] : '';
    $numberAddition = (isset($aMatch[3])) ? $aMatch[3] : '';
    return array('street' => $street, 'number' => $number, 'numberAddition' => $numberAddition);
}