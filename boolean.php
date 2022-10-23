<?php 

// BOOLEAN

$isCompleted = true;
$boolFalseStr = (string) false;     // String(0) ""
$boolTrueStr = (string) true;     // String(1) "1"
$strFalseIsTrue = 'false';

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// string '' = false
// array [] = false
// null = false

var_dump(is_bool($boolFalseStr));
var_dump(is_bool($strFalseIsTrue));

if($isCompleted){
    // DO THIS
    echo "If success";
} else {
    // DO THIS
    echo "Else success";
}