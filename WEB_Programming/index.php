<?php

// 1.1
$ip = '206.190.36.45';
$domainName = gethostbyaddr($ip);
$arr = explode('.', $domainName);

echo implode('.', array_slice($arr, count($arr)-2, 2));

// 1.2
echo '<br />';

$domain = 'dotcom.com';

print_r(checkdomainName($domain));

function checkdomainName($domain) {
    return dns_get_record($domain) ? true : false;
}

// 1.3 
//header("HTTP/1.1 301 Moved Permanently");
//header("Location: http://www.google.com");
//exit(); 

// 2
echo '<br />';

$file = 'https://www.epam.com/about';

echo countSvg($file);

function countSvg($file) {
    preg_match_all('/<svg/', file_get_contents($file), $matches);

    return count($matches[0]);
}

// 3
echo '<br />';

$arr = [1, 5, 7, 4, 8, 9, 6, 5, 3, 4, 2];

print_r(sortArray($arr, 3));
print_r(sortArray($arr, 3, 5));

function sortArray($array, $index, $length = null) {
    $slicedArray = array_slice($array, $index, $length);
    $chunkedArray = array_chunk($array, $index);
    sort($slicedArray);
    
    if($length) {
        $result = array_merge(array_merge($chunkedArray[0], $slicedArray), array_splice($array, $index + $length));
        return $result;
    }

    $result = array_merge($chunkedArray[0], $slicedArray);
    return $result;
}

// 4
echo '<br >';

$arr = [1, -2, 3, 4, -5, -4, 3, 2, 1];
$range = [[1, 3], [0, 5], [6, 8]];

sortArrayWithRange($arr, $range);

function sortArrayWithRange($array, $range) {
    $sumOfArr = 0;
    $result = [];

    foreach($range as $values) {
        $sum = array_sum(array_slice($array, $values[0], $values[1]));

        if($sum > $sumOfArr) {
           $sumOfArr = $sum;
           $result = $values;
        }
    }
    
    return $result;
}

// 5
echo '<br />';

$smiles = [';]', ':[', ';*', ':$', ';-D'];

print_r(countSmiles($smiles));

function countSmiles($smiles) {
    $result = preg_grep('/(:|;){1}(-|~)?(\)|D){1}/', $smiles);
    
    return count($result);
}

// 6
echo '<br />';

$str = 'raersrrrersassswwaaadfdfeeefgtthtgffdd';

echo maxCharDistance($str);

function maxCharDistance($string) {
    $result = ['', 0];
    
    $unique = array_merge(array_unique(str_split($string, 1)));
    
    for($i = 0, $length = count($unique); $i < $length; $i++) {
        $currentDistance = (strrpos($string, $unique[$i]) - strpos($string, $unique[$i])) + 1;
        if($currentDistance > $result[1]){
            $result[0] = $unique[$i];
            $result[1] = $currentDistance;
        }
    }

    return $result[0] . $result[1];
}
















