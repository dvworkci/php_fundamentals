<?php
define("EL","\n");

// Variable scopes

// Global scope
$x = 5;     // It is in global scope

// function foo(){
//     echo $x;    // error, local scope
// }

function foo(){
    $x = 1;
    echo $x . EL;
}

function foo2($num){
    echo $num . EL;
}

// Using global keyword, we can access $x
function foo3(){
    global $x;

    // We are also able to change the value by reference
    $x = 10;
    echo $x . EL;
}

// foo3();
// echo $x . EL;

// Static variables
// The static keyword is also used to declare variables in a function which keep their value after
//  the function has ended.

function getValue(){
    // We can use static keyword to cache data
    static $val = null;

    if($val === null){
        $val = someVeryExpensiveFunction();
    }
    // Some more processing with $val

    return $val;
}

function someVeryExpensiveFunction(){
    echo 'Processing...' . EL;
    sleep(2);
    return 10;
}


// This will wait for 6 total seconds as we are calling it three times
echo getValue() . EL;
echo getValue() . EL;
echo getValue() . EL;
