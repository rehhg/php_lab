<?php

// 1
$arr = [1, 3, 2, 4];

foreach ($arr as $value){
    for($i = 0; $i < $value; $i++) {
        $newArr[] = $value;
    }
}

print_r($newArr);

// 2
echo "<br />";

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 
    28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);

temeprature($temperatures);

function temeprature($array) {
    sort($array);
    $arrayUnique = array_unique($array);
    $arr = [];
    foreach($arrayUnique as $value) {
        $arr[] = $value;
    }
    $length = count($arr);
    
    echo 'Three lowest tepmeratures are ' . $arr[0] . ', ' . $arr[1] . ', ' . $arr[2] . '<br />';
    echo 'Three highest tepmeratures are ' . $arr[$length-1] . ', ' . $arr[$length-2] . ', ' . $arr[$length-3] . '<br />';
    echo 'Three middle tepmeratures are ' . $arr[ceil(($length)/2)] . ', ' . $arr[($length-1)/2] . ', ' . $arr[($length-2)/2] . '<br />';
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
    return function($a, $b) use($key){
        return strnatcmp($a[$key], $b[$key]);
    };
}

function filterTags($arr){
    $newArr = [];
    foreach($arr as $key => $value) {
        if(array_key_exists("tags", $value) && in_array("php", $value["tags"])){
            $newArr[] = $value;
        }
    }
    
    return $newArr;
}

uasort($books, sorter('price'));
echo "<pre>";
print_r($books); // sorted by price
print_r(filterTags($books)); // filtered by tags which contain "php"
echo "</pre>";
