<?php

$a = null;
$b = "";

echo compareAndSum($a, $b);

function compareAndSum($str1, $str2) {
    $arr1 = putAsciiCharsIntoArray($str1);
    $arr2 = putAsciiCharsIntoArray($str2);

    return array_sum($arr1) === array_sum($arr2);
}

function putAsciiCharsIntoArray($str) {
    $arr = [];
    for ($i = 0; $i < strlen($str); $i++) {
        
        if ((int)($str[$i]) > 0) {
            $arr = [];
            break;
        } else {
            $arr[] = ord(strtoupper($str[$i]));
        }
        
    }
    return $arr;
}
