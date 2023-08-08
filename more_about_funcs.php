<?php
define("EL","\n");

// More about functions
// variable, anonymous and arrow functions

function sums(int|float ...$nums): int|float {
    return array_sum($nums);
}

$x = 'sum';

// echo $x(1,2,3,4,5) . EL;

// is_callable — Verify that a value can be called as a function from the current scope.
if(is_callable($x)){
    echo $x(1,2,3,4,5);
} else {
    echo 'Function is not callable';
}

