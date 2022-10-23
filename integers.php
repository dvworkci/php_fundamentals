<?php
define("EL","\n");

// INTEGERS

echo PHP_INT_MAX . EL;
echo PHP_INT_MIN . EL;
echo PHP_INT_SIZE . EL;

# NORMAL INT
$num1 = 27;

# HEXADECIMAL 
$hexNum1 = 0x2A;

# OCTAL NUMBERS
$octNum1 = 055;

# INTS AS BINARY NUMS
$binaryInt = 0b11;

// echo "Normal Int: " . $num1 . EL;
// echo "Hexadecimal Int: " . $hexNum1 . EL;
// echo "Octal Int: " . $octNum1 . EL;
// echo "Binary Int: " . $binaryInt . EL;

$numOverflow =  PHP_INT_MAX + 1;    # CHANGES THE TYPE OF VARIABLE FROM INT TO FLOAT

// var_dump($numOverflow) . EL;

// CASTING OTHER DATA TYPES TO INT
// BOOLEAN
$intBoolTrue = (int) true;      // 1
$intBoolFalse = (int) false;    // 0

// FLOAT TO INT CONVERSION WILL LOSE THE DECIMAL VALUE
$floatToInt = (int) 3.14;       // 3

//  STRINGS WILL ONLY BE CONVERTED TO INT IF IT CONTAINS ONLY NUMBERS OTHERWISE IF STRING CONTAINS OTHER 
//  CHARS THEN THEY WILL BE DISCARDED
$strToInt = (int) '5.6';        // int(5)
$strToIntTwo = (int) '56';      // int(56)
$strToIntThree = (int) '67sa,kjh';      // int(67)
$strToIntFour = (int) 'test';       // int(0)
$strToIntFive = (int) null;         // int(0)
$strToIntSixe = (int) '2_000_000';  // int(2)

// TO CHECK IF A VARIABLE IS INT OR NOT 
var_dump(is_int($floatToInt));