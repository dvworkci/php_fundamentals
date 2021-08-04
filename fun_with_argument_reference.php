<?php

    function ref(&$string){
        $string .= " Changed because passed by reference.";
    }

    $str = "Original String |";
    ref($str);
    echo $str;

