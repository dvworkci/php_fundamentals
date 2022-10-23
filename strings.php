<?php 
define("EL","\n");

// STRINGS

$firstName = 'John';       // Within single quotes cannot use variables
$lastName = "{$firstName} Smith";      // Within double quotes can use variables

echo $firstName . EL;
echo $lastName . EL;

// We can access any letter of a string using its index number
echo $firstName[0] . EL;     // J
echo $firstName[-2] . EL;     // h

// We can also change any letter of a string using its index value
$firstName[0] = 'V';
echo $firstName . EL;