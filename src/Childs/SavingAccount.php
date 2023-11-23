<?php

namespace Bank\Childs;

use Bank\Parent\BankAccount;

class SavingAccount extends BankAccount
{
    public function __construct(
        protected int $accountNumber,
        protected int $balance,
        protected string $registerDate,
        protected int $benefit
    ) {

        parent::__construct($accountNumber, $balance, $registerDate);
    }

    public function getBenefit()
    {
        return $this->benefit;
    }

    public function setBenefit(int $benefit)
    {
        $this->benefit = $benefit;

        return $this;
    }

    public function info(): string
    {
        return parent::info() . sprintf(" benefit : %d",$this->benefit) . PHP_EOL;
    }
}
