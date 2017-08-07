<?php

// 1
$arr = [1, 3, 2, 4];
$newArr = [];
$index = 0;

foreach ($arr as $value) {
    $newArr += array_fill($index, $value, $value);
    $index += $value;
}

//print_r($newArr);

// 2
echo "<br />";

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31,
    28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);

temeprature($temperatures);

function temeprature($array) {
    sort($array);
    $length = count($array);

    $avgTemperatures = round(array_sum($array) / count($array));
    
    foreach ($array as $key => $value) {
        if($value > $avgTemperatures) {
            $temperatures = array_slice($array, $key);
            break;
        }
    }
    $tempArrayKeys = array_search(array_shift($temperatures), $array); 
    $averageArray = array_slice($array, $tempArrayKeys - 1, 3);

    echo 'Three lowest tepmeratures are ' . $array[0] . ', ' . $array[1] . ', ' . $array[2] . '<br />';
    echo 'Three middle tepmeratures are ' . $averageArray[0] . ', ' . $averageArray[1] . ', ' . $averageArray[2] . '<br />';
    echo 'Three highest tepmeratures are ' . $array[$length - 3] . ', ' . $array[$length - 2] . ', ' . $array[$length - 1] . '<br />';
}

// 3
$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];

function sorter($key) {
    return function($a, $b) use($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

function filterTags($arr) {
    $newArr = array_filter($arr, function($value) {
        return array_key_exists("tags", $value) && in_array("php", $value["tags"]) ? $value : false;
    });
    return $newArr;
}

uasort($books, sorter('price'));
echo "<pre>";
print_r($books); // sorted by price
print_r(filterTags($books)); // filtered by tags which contain "php"
echo "</pre>";
