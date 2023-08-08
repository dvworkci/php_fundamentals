<?php
define("EL","\n");
// Control Structures (if / else / else if)

$grade = 97;

if($grade >= 90){
    echo 'A';
    if($grade >= 95){   // Nesting of if statement
        echo '+';
    }
} else if($grade >= 80){
    echo 'B' . EL;
} else if($grade >= 70){
    echo 'C' . EL;
} else if($grade >= 60){
    echo 'D' . EL;
} else if($grade >= 50){
    echo 'E' . EL;
} else {
    echo 'F' . EL;
}