<?php
//IBAN CHECK
function IBANCheck($iban) {
    $iban = strtoupper(str_replace(' ', '', $iban));
    if (preg_match('/^[A-Z]{2}[0-9]{2}[A-Z0-9]{1,30}$/', $iban)) {
        $country = substr($iban, 0, 2);
        $check = intval(substr($iban, 2, 2));
        $aanmeldbanknr = substr($iban, 4);
        $search = range('A','Z');
        foreach (range(10,35) as $tmp)
            $replace[]=strval($tmp);
        $numstr=str_replace($search, $replace, $aanmeldbanknr.$country.'00');
        $checksum = intval(substr($numstr, 0, 1));
        for ($pos = 1; $pos < strlen($numstr); $pos++) {
        $checksum *= 10;
        $checksum += intval(substr($numstr, $pos,1));
        $checksum %= 97;
        }
        return ((98-$checksum) == $check);
    } 
    else
        return false;
}