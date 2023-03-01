<?php
define("EL","\n");

// Arrow functions

$arr1 = [1,2,3,4];

// $arr2 = array_map(function($num){
//     return $num * $num;
// },$arr1);

// Same logic with arrow function
$arr2 = array_map(fn($num) => $num * $num,$arr1);

print_r($arr2);