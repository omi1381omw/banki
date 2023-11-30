<?php

namespace Banki\Models;


class Customer extends User
{
    protected BankAccount $account;

    public function __construct(
        protected string $name,
        protected string $nationalCode,
        protected string $mobile,
        protected ?int $age = null,
    ) {
        parent::__construct($name, $nationalCode, $mobile);
    }
}
