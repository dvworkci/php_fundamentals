<?php 

error_reporting(E_ALL & ~E_WARNING);

// How to trigger an erro in PHP :-
// trigger_error('Test error');    // will stop script execution
// trigger_error('Test error',E_USER_WARNING);    // will not stop script execution

// Custom error handler in PHP 
function errorHandler(
    int $type,
    int $msg,
    ?string $file = null,
    ?int $line = null
) {
    echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;
    exit;   
}

set_error_handler('errorHandler',E_ALL);
echo $x;
