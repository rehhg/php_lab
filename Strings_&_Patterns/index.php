<?php

// 1
$str = "var_test_text";
$newStr = str_replace("_t", "T", $str);
echo $newStr;

// 2
echo "<br />";
$string = 'ФЫВА олдж';
list($exploadedString1, $exploadedString2) = explode(" ", $string);
$newString = strrev_utf($exploadedString1) . ' ' . strrev_utf($exploadedString2);

echo $newString;

function strrev_utf($str){
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0]));
}

// 3
echo "<br />";
$a = [342, 55, 33, 123, 66, 63, 9];

foreach ($a as $value) {
    $value = (string)$value;
    
    for($i = 0; $i < strlen($value); $i++) {
        if($value[$i] == '3') {
            echo $value . ' ';
            break;
        }
    }
}

// 4
echo "<br />";
$a = [342, 55, 33, 123, 66, 63, 9];

$sum = 0;
foreach ($a as $value) {
    $value = (string)$value;
    
    for($i = 0; $i < strlen($value); $i++) {
        if($value[$i] == '3') {
            $sum++;
        }
    }
}
echo $sum;