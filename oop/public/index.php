<?php
declare(strict_types=1);

require_once '../Transaction.php';
// Classes & Objects
$transaction = (new Transaction(100,'Transaction 1'))
                ->addTax(8)
                ->applyDiscount(10);
// $transaction->amount = 15;
// $transaction->description = "Transaction 1";
// $transaction->addTax(8);
// $transaction->applyDiscount(10);
// $transaction->addTax(8)->applyDiscount(10);

var_dump($transaction->getAmount());
var_dump($transaction->getDescription());

// Create object without class using \stdClass();
$obj = new \stdClass();

$obj->amount = 100;
$obj->description = 'Sample transaction';

// Convert array into object
$arr = [1,2,3];
$obj2 = (object) $arr;

var_dump($obj2->{1});   // 2