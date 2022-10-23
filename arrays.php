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
        'version' => 8.1
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'version' => 3.6
    ]
];

print_r($versions) . EL;