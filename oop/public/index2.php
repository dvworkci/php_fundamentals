<?php

require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';

$transaction = new Transaction(100,'Transaction 1');
// $transaction->customer = new Customer();

// echo $transaction->customer?->paymentProfile?->id;
// echo $transaction->customer?->paymentProfile?->id ?? 'Otherwise';
// echo $transaction->getCustomer()->getPaymentProfile()?->id ?? 'Otherwise';  // This will not work, but we can use nullsafe operator here like this : -

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'Otherwise';  // This will work