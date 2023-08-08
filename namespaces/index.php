<?php
declare(strict_types=1);

require_once 'src/PaymentGateway/Razorpay/Transaction.php';
require_once 'src/PaymentGateway/Razorpay/Customer.php';
require_once 'src/Notification/Email.php';
require_once 'src/PaymentGateway/Stripe/Transaction.php';

// Namespaces : -
// Normal classes without a namespace are declared in the global space
use PaymentGateway\Razorpay\{Transaction as RazorT,Customer as RazorCustomer};   // Import multiple class of same namespace using grouping like this
use PaymentGateway\Stripe\Transaction as StripeT;

echo "<pre>";

var_dump(new RazorT());
var_dump(new RazorCustomer());
var_dump(new StripeT());
// var_dump(new \PaymentGateway\Stripe\Transaction());

include_once('views/layout.php');   // This will not inherit any classed mentioned above