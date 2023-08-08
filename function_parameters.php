<?php

// Information may be passed to functions via the argument list, which is a comma-delimited list of expressions.
// The arguments are evaluated from left to right, before the function is actually called (eager evaluation).
declare(strict_types=1);

function foo(int $x,int $y){
    return $x * $y;
}

// Starting from php 8, we can delare multiple types for a function argument using |
function bar(int|float $x, int|float $y){
    return $x * $y;
}

// We can define default value for an argument but they should be defined only after non-optional arguments else it
// it will give an error
function demo($x,$y = 10){
    return $x / $y;
}

// Spread operator
function sum(...$nums){
    return array_sum($nums);
}

var_dump(foo(2,3));
var_dump(bar(2.1,3));
var_dump(demo(2));
var_dump(sum(1,2,3,4,4));

// We can also pass an array to spread operator argument
// but we have to unpack it first using spread operator like this
$numbers = [1,2,3,4,5];

var_dump(sum(... $numbers));

// PHP 8 Named arguments
// PHP 8.0 supports optionally calling functions and class methods by specifying the parameter name, 
// instead of calling them on the order of parameters that they are declared.

// PHP, and many other programming languages, support positional parameters: 
// The caller passes the parameters in the same order the function/method declares its parameters.

// In PHP 8.0, Named Parameters support is added, which means it's now possible to call a 
// function/method by setting the parameters by their name.

function named_arg_demo(int $x,int $y){
    if($x % $y === 0){
        return $x / $y;
    }
    return $x;
}

$x = 6;
$y = 3;

// Normal function call, not in order can give unexpected results
var_dump(named_arg_demo($y,$x));
// Named arguments
var_dump(named_arg_demo(y: $y,x: $x));

// Use cases of named arguments
// 1. As explained in above example, ordering does not matter if using named arguments
// 2. When you have a bunch of parameters that have default value e.g.,

// Without using named arguments, we will have to pass all the default values in case we do not want
// to and only pass the desired arguments
// setcookie('foo','bar',0,'',false,true);

// With use of named arguments
// setcookie(name: 'acookie',value: 'acook_Value',httponly:true);

// We cannot pass the same argument multiple time or it will give an error

// We can also use an associative array as named arguments this way
$arr = ['x' => 1, 'y' => 2];
var_dump(named_arg_demo(...$arr));