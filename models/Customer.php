<?php

namespace Banki\Models;


class Customer extends User
{
    protected BankAccount $account;

    public function __construct(
        protected string $name,
        protected string $nationalCode,
        protected string $mobile,
        protected ?int $age,
    ) {
        parent::__construct($name, $nationalCode, $mobile);
    }

    public function info(): string
    {
        return parent::info() . sprintf(
            " name : %d and family : %d and age : %d and nationalCode : %d and phoneNumber : %d",
            $this->name,
            $this->family,
            $this->age,
            $this->nationalCode,
            $this->phoneNumber,
            
            ) . PHP_EOL;
    }
}
