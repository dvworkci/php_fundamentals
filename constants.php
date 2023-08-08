<?php

// WE CAN USE define() FUNCTION TO DECLARE CONSTANTS
define("PI",3.141592653589793238);      // By Convention, Constants name should all be in Upper Case only
define("ENDL","<br>");
// OR WE CAN ALSO USER const keyword to define constants
const STATUS = "paid";

echo PI . ENDL;
echo STATUS. ENDL;

if(true){
    define('MSG',"Test Message");   // THIS WOULD WORK WITH define function()
}

if(true){
    // const PASSWORD = "secret_password123";      //  THIS WILL NOT WORK WITH const keyword
}

// PRE-DEFINED CONSTANTS
// EXAMPLE
echo PHP_VERSION . ENDL;

// __FILE__ Prints the full path of the file in which it is mentioned
echo __FILE__ . ENDL;