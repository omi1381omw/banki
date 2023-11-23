<?php

namespace Bank\Childs;

use Bank\Parent\BankAccount;

class LoanAccount extends BankAccount
{

    public function __construct(
        protected int $accountNumber,
        protected int $balance,
        protected string $registerDate,
        protected bool $vam = false
    ) {

        parent::__construct($accountNumber, $balance, $registerDate);
    }

    public function getVam()
    {
        return $this->vam;
    }

    public function setVam(bool $vam)
    {
        $this->vam = $vam;
        
        return $this;
    }

    public function info(): string
    {
        return parent::info() . sprintf(' and has vam: %s',  $this->vam) . PHP_EOL;
    }
}