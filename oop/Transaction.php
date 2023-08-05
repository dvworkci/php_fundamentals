<?php
declare(strict_types=1);

class Transaction 
{

    // public ?Customer $customer = null;
    private ?Customer $customer = null;
    // private float $amount;
    // private string $description;

    // Simple constructor
    // public function __construct(float $amount,string $description)
    // {
    //     $this->amount = $amount;
    //     $this->description = $description;
    // }

    // Constructor property promotion
    // NOTE: you can type hint any type except callable
    public function __construct(
        private float $amount,
        private string $description = 'Unknown transaction'
    )
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate) : Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate) : Transaction
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    // getters 
    public function getAmount(): float 
    {
        return $this->amount;
    }

    public function getDescription(): string 
    {
        return $this->description;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    // Destructor
    // public function __destruct()
    // {
    //     echo 'Destruct ' . $this->description . '<br />';
    // }
}