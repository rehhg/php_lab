<?php

$a = null;
$b = "";

echo compareAndSum($a, $b);

function compareAndSum($str1, $str2) {
    $arr1 = putCharsIntoArray($str1);
    $arr2 = putCharsIntoArray($str2);

    return (array_sum($arr1) == array_sum($arr2)) ? true : false;
}

function putCharsIntoArray($str) {
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
