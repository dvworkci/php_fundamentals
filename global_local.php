<?php

    $y = 23;

    function test(){
        $x =19;
        global $y;  // global USED TO ACCESS VARIABLES DECLARED OUT OF FUNCTIONS SCOPE

        echo "X: $x" . "<br>";
        echo "Y: $y" . "<br>";
    }

    test();
    echo "X: $x";