<?php

namespace Banki\Childs;

use Banki\Parent\BankAccount;

class CustomerAccount extends BankAccount
{
    public function __construct(
        protected int $accountNumber,
        protected int $balance,
        protected string $registerDate,
        protected string $name,
        protected string $family,
        protected int $age,
        protected int $nationalCode,
        protected int $phoneNumber,
    ) {

        parent::__construct($accountNumber, $balance, $registerDate);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getFamily()
    {
        return $this->family;
    }

    public function setFamily(string $family)
    {
        $this->family = $family;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    public function getNationalCode()
    {
        return $this->nationalCode;
    }

    public function setNationalCode(int $nationalCode)
    {
        $this->nationalCode = $nationalCode;

        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(int $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
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
