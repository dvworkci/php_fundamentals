<?php
define("EL","\n");

// While loop
$i = 0;
// while($i <= 15){
//     echo $i++ . EL;
// }

// Nesting a while loop within a while loop
// while($i <= 15){
//     if($i % 2 == 0){
//         $i++;

//         continue;
//     }

//     echo $i++ . EL; // Print only odd numbers
// }

// Breaking out of a loop
// while($i <= 15){
//     if($i == 5){
//         break;
//     }

//     echo $i++ . EL;
// }

// Breaking out of a nested loop
// while(true){
//     while($i < 10){
//         break 2; // Break all 2 levels of this loop inner while and outer while as well
//     }

//     echo $i++ . EL;
// }

// do while loop in PHP
// do while loop will execute at least one time even if the condition is false
// do{
//     echo $i++ . ', ';
// }while($i <= 15);

// for loop in PHP
// for($i;$i <= 15;$i++){
//     echo $i . ', ';
// }
// for($i;$i <= 15;print $i . ', ',$i++){
//     // echo $i . ', ';
// }

$text = "Hello World";

// for($i;$i < strlen($text); $i++){   // Not recommended as for each iteration we are callong a function which can cause some performance issues
//     echo $text[$i] . EL;
// }
// Instead we can use the following trick
// for($i, $length = strlen($text);$i < $length; $i++){   // Not recommended as for each iteration we are callong a function which can cause some performance issues
//     echo $text[$i] . EL;
// }

// For each loop in PHP
// Mainly used to iterate over arrays and objects
$programmingLanguages = ['php','java','c++','go','javascript'];

// foreach($programmingLanguages as $language){
//     echo $language . EL;
// }

// Or we can also access the keys of an array
// foreach($programmingLanguages as $key => $val){      // Note that val is passed by value of the array
//     echo $key . ' = ' . $val . EL;
// }

// If we want to change the original value of any key of original array we can pass it as a reference
// foreach($programmingLanguages as $key => &$val){      // Note that val is passed by value of the array
//     $val = 'php';
//     // echo $key . ' = ' . $val . EL;
// }

// print_r($programmingLanguages);

$user = [
    'name' => 'Dushyant',
    'email' => 'dushyant@test.com',
    'skills' => ['php','js','jquery']
];

foreach($user as $key => $val){
    echo $key . ': ';

    if(is_array($val)){
        foreach($val as $skill){
            echo $skill . ' - ';
        }
    } else {
        echo $val;
    }

    echo EL;
}