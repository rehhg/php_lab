<?php

// 1
$str = "var_test_fail";
$newStr = preg_replace_callback("/(?:^|_)([a-z])/", function($matches) {
    return strtoupper($matches[1]);
}, $str);

echo $newStr;

// 2
echo "<br />";
$string = 'ФЫВА олдж';
list($exploadedString1, $exploadedString2) = explode(" ", $string);
$newString = strrev_utf($exploadedString1) . ' ' . strrev_utf($exploadedString2);

echo $newString;

function strrev_utf($str) {
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0]));
}

// 3
echo "<br />";
$a = [342, 55, 33, 123, 66, 63, 9];

$fileterd = array_filter($a, function($value) {
    if (strpos($value, '3') !== FALSE) {
        echo $value . ' ';
    }
});

// 4
echo "<br />";
$a = [342, 55, 33, 123, 66, 63, 9];

$sum = 0;
foreach ($a as $value) {
    if (preg_match('/[3]+/', $value, $matches)) {
        $sum += strlen($matches[0]);
    }
}
echo $sum;
