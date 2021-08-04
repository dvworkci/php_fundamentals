<?php

    function hello($fname = "First Name",$lname = "Last Name"){
        $full_name = "$fname $lname";

        return $full_name;
    }

    function sum($math,$eng,$science){
        $sum = $math + $eng + $science;

        return $sum;
    }

    function percentage($total_sum){
        $percent = $total_sum / 3;

        echo $percent . "<br>";
    }

    $mark = hello("Mark","Hamill");
    $john = hello("John","Hamill");
    $jane = hello("Jane","Hamill");