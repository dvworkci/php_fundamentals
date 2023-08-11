<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
    // Static property example
    private static int $count = 0;
    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
        // We can access constants in a class like this : -
        // var_dump(self::STATUS_PAID);
        // Increment count everytime a new instance is created
        self::$count++;
    }

    public function setStatus(string $status): self
    {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid Status');
        }
        $this->status = $status;
        return $this;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}
