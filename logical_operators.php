<?php

    // LOGICAL OPERATORS IN PHP

    $age = 20;

    // && 
    if($age >= 18 && $age <= 30){
        echo "You are eligible";
    }

    // ||

    if($age >= 12 || $age <= 18){
        echo "You are a teenager";
    }

    // !

    if(!($age <= 18)){
        echo "You are not younger than 18";
    }

    // xor
    if($age <= 18 xor $age >= 25){
        echo "Exclusive Operator";
    }