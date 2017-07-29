<?php

// 1

echo bandName('alaska');

function bandName($name) {
    $length = strlen($name);
    $realBandName = '';
    
    if($name[0] === $name[$length-1]) {
        $realBandName .= ucfirst($name) . substr($name, 1);
    } else {
        $realBandName .= 'The ' . ucfirst($name);
    }
    
    return $realBandName;
}

// 2
echo "<br />";

echo converter('ATTGC');

function converter($string) {
    $length = strlen($string);
    $newString = '';
    
    for($i = 0; $i < $length; $i++) {
        switch($string[$i]) {
            case 'A':
                $newString .= 'T';
                break;
            case 'T':
                $newString .= 'A';
                break;
            case 'G':
                $newString .= 'C';
                break;
            case 'C':
                $newString .= 'G';
                break;
        }
    }
    
    return $newString;
}