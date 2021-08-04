<?php

    function test(){
        echo "Test Function <br>";
    }

    // VARIABLE AS A FUNCTION
    $var = "test";
    $var();

    // OR

    $var_func = function($name){    // THIS IS ALSO CALLED ANONYMOUS FUNCTION
        echo "Adios $name <br>";
    };

    $var_func("Akash");