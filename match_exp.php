<?php
define("EL","\n");

// match expression in PHP
$paymentStatus = 3;

// switch ==
// match ===
$res = match($paymentStatus){
    'paid' => 'Paid',
    'declined' => 'Declined',
    'pending' => 'Pending',
    default => 'Unknow payment status'
};

// We can also give multiple expressions in match
$res = match($paymentStatus){
    1 => 'Paid',
    2,3 => 'Declined',
    4 => 'Pending',
    default => 'Unknow payment status'
};

echo $res . EL;