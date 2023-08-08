<?php
define("EL","\n");

$x = 2;
// This is an anonymous function
// In anonymous function, we can access variables from global scope using the use keyword
$sum = function (int|float ...$nums) use($x): int|float {
    echo $x . EL;
    return array_sum($nums);
};

// We can pass the variable $sum as an arugment and also return it from any function

echo $sum(1,2,3,4,5) . EL;