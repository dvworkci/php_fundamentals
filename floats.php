<?php
define("EL","\n");

// FLOAT DATA TYPE IN PHP

$floatArr['floatOne'] = '3.14';
$floatArr['floatTwo'] = 13.5e3;
$floatArr['floatThree'] = 13.5e-3;

var_dump($floatArr);

// FLOAT MAXIMUM AND MINIMUM RANGE
echo PHP_FLOAT_MAX . EL;
echo PHP_FLOAT_MIN . EL;

$num = floor((0.1 + 0.7) * 10);     // RESULT IS 7, WHICH IS WRONG, IT SHOULD BE 8
// The reason is 0.1 or 0.7 dont have exact representations as floating point numbers use base 2 which is
// binary and binary is used internally to store the floating numbers
// and therefore when converting a floating point number into binary, it loses some precision internally
// e.g 0.7 in binary is 7.999999999999118

$numUp = ceil((0.1 + 0.7) * 10);     // RESULT = 8
$numUpTwp = ceil((0.1 + 0.2) * 10);  // RESULT = 4, WHICH IS WRONG, IT SHOULD BE 3

// NOTE: NEVER COMFPARE FLOAT DIRECTLY IN ANY IF CONDITION OF ANY LOOP

echo NAN . EL;       // NAN = Not a number
echo log(-1). EL;   // NAN = Not a number
echo INF. EL;        // INF = Infinity
$infNum = PHP_FLOAT_MAX * 2;     // INF

var_dump(is_infinite($infNum));