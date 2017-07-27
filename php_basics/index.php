<?php

// 1)
$text1 = 'Hello';
$text2 = 'World';
echo $text1 . ' ' . $text2;

// 2)
echo "<br />";

$var = 'hello';
echo "$var[0]<br />$var[1]<br />$var[4]";

// 3)
echo "<br />";

$a = 2; // 5, 0, -3, 2

if ($a > 0 && $a < 5) {
    echo 'Вірно';
} else {
    echo 'Невірно';
}

// 4)
echo "<br />";

$min = rand(0, 59);

if ($min >= 0 && $min < 15) {
    echo "перша";
} elseif ($min >= 15 && $min < 30) {
    echo "друга";
} elseif ($min >= 30 && $min < 45) {
    echo "третя";
} else {
    echo "четверта";
}

// 5)
echo "<br />";

$year = 2017;

if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
    echo "рік високосний";
} else {
    echo "рік не високосний";
}

// 6)
echo "<br />";

$str = "385934";

$sum1 = $str[0] + $str[1] + $str[2];
$sum2 = $str[3] + $str[4] + $str[5];

if($sum1 === $sum2) {
    echo "так";
} else {
    echo "ні";
}