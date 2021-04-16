<?php

    // SWITCH STATEMENT

    $weekday = 2;

    switch($weekday){
        case 1:
            echo "Today is Monday";
        break;
        case 2:
            echo "Today is Tuesday";
        break;
        case 3:
            echo "Today is Wednesday";
        break;
        case 4:
            echo "Today is Thursday";
        break;
        case 5:
            echo "Today is Friday";
        break;
        case 6:
            echo "Today is Saturday";
        break;
        case 7:
            echo "Today is Sunday";
        break;
        default:
            echo "Enter Valid Weekday!";
    }

    /*
    $age = 18;

    switch(true){
        case ($age >= 18):
            echo "You are Eligible";
        break;
        case ($age < 18):
            echo "You are not Eligible";
        break;
        default:
            echo "Enter Valid Age";
    }
    */