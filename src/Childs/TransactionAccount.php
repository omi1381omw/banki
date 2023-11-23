<?php

namespace Bank\Childs;

use Bank\Parent\BankAccount;


class TransactionAccount extends BankAccount
{
   
    public function __construct(
        protected int $accountNumber,
        protected int $balance,
        protected string $registerDate,
        protected bool $check = false
    ) {

        parent::__construct($accountNumber, $balance, $registerDate);
    }

    public function getCheck()
    {
        return $this->check;
    }

    public function setCheck(bool $check)
    {
        $this->check = $check;
        
        return $this;
    }

    public function info(): string
    {
        return parent::info() . sprintf(' has check %s',  $this->check) . PHP_EOL;
    }
}