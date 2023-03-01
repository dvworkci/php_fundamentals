<?php
define("EL","\n");

// Callback Functions
// A callback function (often referred to as just "callback") is a function which is passed as an argument into 
// another function.

// Any existing function can be used as a callback function. To use a function as a callback function, pass a 
// string containing the name of the function as the argument of another function:

$arr1 = [1,2,3,4];

// $arr2 = array_map(function($element){
//     return $element * 2;
// }, $arr1);

// $func = function($element) {
//     return $element * 2;
// };

function foo($element){
    return $element * 2;
}

$arr2 = array_map('foo',$arr1);

print_r($arr1) . EL;
print_r($arr2) . EL;