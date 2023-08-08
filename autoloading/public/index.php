<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
// Autoloading using PSR standard
// spl_autoload_register(function($class){
//     $path = __DIR__ . '/../' . lcfirst(str_replace('\\','/',$class)) . '.php';
//     if(file_exists($path)){
//         require($path);
//     }
// });

use Ramsey\Uuid\UuidFactory;
use App\PaymentGateway\Paddle\Transaction;
$paddleTransaction = new Transaction();
// var_dump($paddleTransaction);
$id = new UuidFactory();
echo $id->uuid4();
