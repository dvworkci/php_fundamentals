<?php

    function hello($fname,$lname){
        echo "Hello $fname $lname <br>";
    }

    function add($num1,$num2){
        echo $num1 + $num2 . "<br>";
    }

    hello("John","Doe");

    hello("Mark","Hamill");

    add(4,5);