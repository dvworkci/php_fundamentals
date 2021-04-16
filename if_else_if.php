<?php

    // IF ELSE IF 

    $PERCENT = 64;

    if($PERCENT >= 80 && $PERCENT <= 100){
        echo "Excellent! First Division";
    } else if($PERCENT >= 60 && $PERCENT < 80){
        echo "Good work! but work harder"; 
    } else if($PERCENT >= 40 && $PERCENT < 60){
        echo "Average! You need to work more";
    } else if($PERCENT < 40) {
        echo "poor performance!";
    } else {
        echo "Enter Valid Percentage";
    }