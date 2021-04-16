<?php

    // IF STATEMENT
    $num1 = 120;
    $num2 = 4;

    if($num1 > $num2){
        echo "$num1 is greater than $num2";
    }

    // ALTERNATIVE SYNTAX (SUITABLE FOR USE UNDER HTML FILES)
    if($num1 > $num2):
        echo "$num1 is greater than $num2";
    endif;