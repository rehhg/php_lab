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

echo converter('GTAT') . "<br />";
echo converter('ATTGC');

function converter($string) {
    return strtr($string, 'ATCG', 'TAGC');
}