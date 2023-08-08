<?php
define("LB","<br>");        // LB => LINE BREAK

echo "hello,world",LB;
print "bye,world " . LB;
echo print "Dushyant " . LB;
$printValue = print "DV";
echo $printValue . LB;

// PRINTING STRINGS WITH QUOTES
echo 'Dushyant\'s code.' . LB;
echo "Dushyant's code." . LB;
// $this = "hello"; ERROR, CANNOT RE-ASSIGN THIS

$x = 1;
$y = $x;        // CALL BY VALUE, VALUE OF y DOES NOT CHANGE IF x's VALUE IS CHANGED 
echo $y . LB;
$y = &$x;       // CALL BY REFERENCE, VALUE OF y CHANGES WITH x
$x = 4;
echo $y . LB;

// PRINTING VARIABLES IN STRINGS
$firstName = "John";
echo 'Hello $firstName' . LB;    //  Hello $firstName
echo "Hello {$firstName}" . LB;    // Hello John

