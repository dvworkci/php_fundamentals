<?php
define("EL","\n");

// ARRAYS

$programmingLanguages = ['PHP','Javascript','Python','Java','C#','Go','Ruby','Scala'];

echo $programmingLanguages[0] . EL;  // PHP

// We can check if an index key exists in an array using isset function
var_dump(isset($programmingLanguages[0])) . EL;  // bool(true)
var_dump(isset($programmingLanguages[12])) . EL;  // bool(false)

// We can change the value of any array item using its index key
$programmingLanguages[1] = 'C++';
echo $programmingLanguages[1] . EL;

// To get a count of total items in an ARRAY
echo count($programmingLanguages) . EL;

// Push an element to an array
$programmingLanguages[] = 'C';

print_r($programmingLanguages) . EL;

// Associative arrays
$versions = [
    'php' => '8.1',
    'python' => '3.6'
];

// Push another key => value pair
// $versions['go'] = '1.15';

// Multi-dimensional arrays
$versions = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ]
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ]
    ]
];

print_r($versions) . EL;
echo $versions['php']['creator'] . EL;
echo $versions['php']['versions'][0]['releaseDate'] . EL;

// If two array items have the same key then PHP will override the previous one
$arr2 = [0 => 'foo',1 => 'bar',1 => 'baz'];

// PHP will try to cast keys when possible, it is recommended to declare keys only in one data type 
// key type in null is casted to an empty string
$arr3 = [true => 'a',1 => 'b', '1' => 'c',1.8 => 'd'];      // Array([1] => d)

print_r($arr2) . EL;
print_r($arr3) . EL;

$arr4 = ['a','b',50 => 'c','d','e'];
// array_pop() = removes the last element of an array and returns it
echo array_pop($arr4) . EL;
print_r($arr4) . EL;

// array_shift() = removes the first element of an array and returns it
echo array_shift($arr4) . EL;
print_r($arr4) . EL;

$arr5 = [1,2,3];
// we can use unset to destroy whole array or any of its element
unset($arr5[0]);
print_r($arr5) . EL;
// unset($arr5);
// But, if we destroy only keys,
unset($arr5[0],$arr5[1],$arr5[2]);
$arr5[] = 6;            // Array(3) => 6, because array in PHP after getting destroyed retains its last key 
print_r($arr5) . EL;

// CASTING AN SCALAR TYPE INTO AN ARRAY
$x = 5;
var_dump((array) $x) . EL;

// DIFFERENCE BETWEEN isset() and array_key_exists()
$arr6 = ['a' => 1,'b' => 2,'c' => null];

// array_key_exists() will tell you if a particular key exists in an array regardless of its value
var_dump(array_key_exists('c',$arr6)) . EL;

// isset() will tell you if a particular key exists and not set to non-empty value
var_dump(isset($arr6['c'])) . EL;

