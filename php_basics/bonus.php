<?php

$a = "ZzZz";
$b = "ffPFF";

echo compareAndSum($a, $b);

function compareAndSum($str1, $str2) {
    
    $arr1 = array();
    $arr2 = array();
    
    for($i = 0; $i < strlen($str1); $i++) {
        
        if((int)($str1[$i]) > 0){
            $arr1 = [];
            break;
        } else {
            $arr1[] = ord(strtoupper($str1[$i]));
        }
        
    }
    
    for($i = 0; $i < strlen($str2); $i++) {
        
        if((int)($str2[$i]) > 0){
            $arr2 = [];
            break;
        } else {
            $arr2[] = ord(strtoupper($str2[$i]));
        }
        
    }
    
    if(array_sum($arr1) == array_sum($arr2)) {
        return true;
    } else {
        return false;
    }
}