<?php
define("EL","\n");

// ARITHMETIC OPERATORS (+ - * / %)
$x = 10;
$y = 2;

// var_dump($x + $y) . EL;
// var_dump($x - $y) . EL;
// var_dump($x * $y) . EL;
// var_dump($x / $y) . EL;
// var_dump($x % $y) . EL;

// Some tips about arithmetic operators
// Division operator => The type of the result will always be float unless both of the operators are integers and they are evenly divisible
$num1 = 10;
$num2 = 3;
$num3 = 2.0;

// var_dump($num1 / $num2) . EL;
// var_dump($num1 / $num3) . EL;

// Modulus operator => In this operator the operands are casted into integer data type
$num4 = 10.5;

// var_dump($num4 % $num3) . EL;       // 10 % 2 instead of 10.5 % 2.0
// // If you want to perform mod operations on floating numbers use fmod() function
// var_dump(fmod($num4,$num3)) . EL;

// Note: If using modulus in negative numbers then the sign of result will depend on the sign of the dividend only
$num5 = -10;
$num6 = 3;

// var_dump($num5 % $num6) . EL;       // Result = -1

// ASSIGNMENT OPERATORS (= += -= *= /= %= **=)
$x = $y = $z = 23;
// var_dump($x,$y,$z) . EL;

// STRING OPERATORS (. .=)
// Concatenation
$msg1 = "Hello";
$msg2 = "World";
$message = $msg1 . " " . $msg2;
// echo $message . EL;

// COMPARISON OPERATORS (==, ===, !=, !== <>, <, >, <=, >=, <=>, ??, ?:)
$a = '5';
$b = 5;

// var_dump($a == $b);     // Loose equal
// var_dump($a === $b);    // Strict equal

// var_dump($a != $b);    // Loose not equal
// var_dump($a !== $b);    // Strict not equal

// var_dump($a < $b);    // lesst than
// var_dump($a > $b);    // greater than

// var_dump($a <= $b);    // Less than or equal to
// var_dump($a >= $b);    // Greater than or equal to

// Spaceship operator
// var_dump(5 <=> 5);    // Returns 0
// var_dump(1 <=> 5);    // Returns -1 if a < b
// var_dump(10 <=> 5);    // Returns 1 if a > b

// Error control operators (@)
$x = @file('foo.txt');   // File does not exist error, so suppress this error using @

// Increment and Decrement Operators (++, --)
$y = 5;
$res = $y++;
$res2 = ++$y;

// Logical operators (&& || ! and or xor)
$ab = true;
$cd = false;

// &&
// var_dump($ab && $cd);
// var_dump($ab || $cd);
// var_dump(!$ab);

// Bitwise operators (& | ^ ~ << >>) Used to perform bit level operations
$ef = 6;
$gh = 3;

// $ef & $gh means 6 in binary & 4 in binary
// 110 & 011
//  110
//  011
//= 010 = 2 
// var_dump($ef & $gh);    // int(2)

// $ef | $gh means 
// 110 | 011
//  110
//  011
//= 111 = 7
// var_dump($ef | $gh);        // int(7)

// $ef ^ $gh means  ^ => XOR operations
// 110 ^ 011
//  110
//  011
//= 101 = 5
// var_dump($ef ^ $gh);        // int(5)

// Array Operators (+ == === != <> !==)
$arr1 = ['a','b','c','d'];
$arr2 = ['e','f','g','h','i'];

// The + operator returns the right-hand array appended to the left-hand array; for keys that exist in both arrays, the elements from the left-hand array will be used, and the matching elements from the right-hand array will be ignored.
$resArray = $arr1 + $arr2;
print_r($resArray);

// fdiv()
$number_one = 10;
$number_two = 0;
var_dump(fdiv($number_one,$number_two));    // float(INF)