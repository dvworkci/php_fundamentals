<?php
define("EL","\n");

// Switch statement in PHP
$paymentStatus = 'rejected';

// switch($paymentStatus){
//     case 'paid':
//         echo 'Paid' . EL;
//         break;
//     case 'declined':
//         echo 'Declined' . EL;
//         break;
//     case 'pending':
//         echo 'Pending' . EL;
//         break;
//     default:
//         echo 'Unknown payment status' . EL;
// }

// We can execute the code for different switch cases as well
// switch($paymentStatus){
//     case 'paid':
//         echo 'Paid' . EL;
//         break;
//     case 'declined':
//     case 'rejected':
//         echo 'Declined' . EL;
//         break;
//     case 'pending':
//         echo 'Pending' . EL;
//         break;
//     default:
//         echo 'Unknown payment status' . EL;
// }

function x(){
    sleep(3);   // Execution of script continues after 3 seconds
    echo 'Done ' . EL;
    return 1;
}

// if(x() === 1){
//     echo 1;
// } else if(x() === 2){
//     echo 2;
// } else if(x() === 3){
//     echo 3;
// } else {
//     echo 4;
// }               // Very bad way because now it will run x() 3 times and the program will halt for total of 9 seconds, instead we can use switch statement

switch(x()){
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3: 
        echo 3;
        break;
    default:
        echo 4;
}
