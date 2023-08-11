<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enum\Status;

class Transaction
{
    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
        // We can access constants in a class like this : -
        // var_dump(self::STATUS_PAID);
    }

    public function setStatus(string $status): self
    {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid Status');
        }
        $this->status = $status;
        return $this;
    }
}
