<?php

// 1
$arr1 = [20, 10, -80, 10, 10, 15, 35];
$arr2 = [10, -80, 10, 10, 15, 35];

echo findIndex($arr1) . ' ';
echo findIndex($arr2);

function findIndex($arr) {
    $sum = 0;
    $leftSum = 0;
    $length = count($arr);

    foreach ($arr as $value) {
        $sum += $value;
    }

    for ($i = 0; $i < $length; $i++) {
        $sum -= $arr[$i];

        if ($leftSum == $sum) {
            return $i;
        } else {
            $leftSum += $arr[$i];
        }
    }

    return -1;
}

// 1 alternative function
//$arr1 = [20, 10, -80, 10, 10, 15, 35];
//$arr2 = [10, -80, 10, 10, 15, 35];
//
//echo findIndex($arr1) . ' ';
//echo findIndex($arr2);
//
//
//function findIndex($arr) {
//    $sum = 0;
//    foreach ($arr as $index => $value) {
//        $sum += $value;
//        if ($sum === array_sum(array_slice($arr, $index))) {
//            return $index;
//        }
//    }
//    return -1;
//}

// 2
echo '<br />';
$array1 = [1, 1, 1, 2, 1, 1];
$array2 = [0, 0, 0.55, 0, 0];
$array3 = [3, 1, 5, 3, 7, 4, 1, 5, 7];

print_r(getUniqueValue($array1));
print_r(getUniqueValue($array2));
print_r(getUniqueValue($array3));

function getUniqueValue($arr) {
    $counted = array_count_values(array_map('strval', $arr));
    $result = array_filter($counted, function($value) {
        return $value == 1 ? $value : false;
    });
    
    return array_flip($result);
}
