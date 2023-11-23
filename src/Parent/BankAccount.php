<?php

namespace Bank\Parent;

class BankAccount
{
    public function __construct(
        protected int $accountNumber,
        protected int $balance,
        protected string $registerDate
    ) {
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    public function setAccountNumber(int $accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function setBalance(int $balance)
    {
        $this->balance = $balance;

        return $this;
    }

    public function setRegisterDate(string $registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    public function deposit(int $value)
    {
        $this->balance += $value;

        return $this;
    }

    public function withdraw(int $value)
    {
        $this->balance -= $value;

        return $this;
    }

    public function info(): string
    {
        return sprintf(
            "Account Number: %d and Balance: %d and Register Date: %s",
            $this->accountNumber,
            $this->balance,
            $this->registerDate,
        ) . PHP_EOL;
    }
}
