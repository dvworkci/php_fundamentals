<?php
declare(strict_types=1);

namespace PaymentGateway\Razorpay;

use DateTime;
use Notification;

class Transaction 
{
    public function __construct()
    {
        // var_dump(new Customer());
        // var_dump(new DateTime());   // By default PHP will load it from local namespace
        // var_dump(new \DateTime());  // Use it from global namespace, this will work.
        // var_dump(new DateTime());   // Or declare it in use before init
        // Email class
        // var_dump(new Notification\Email()); // Error, it will load it from current namespace PaymentGateway\Razorpay
        // var_dump(new Notification\Email());

        // var_dump(\explode(',','hello,world'));      // calling explode from global namespace
        // var_dump($this->explode(',','hello,world'));       // calling explode from local namespace
    }    

    function explode($separator,$string)
    {
        return 'foo';
    }
}
