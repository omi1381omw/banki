<?php

namespace Banki\Models;

class User {

    public function __construct(
        protected string $name,
        protected string $nationalCode,
        protected string $mobile,
        protected ?int $age = null,
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function info()
    {
        return sprintf(
            "name: %s and nationa code: %s and mobile: %s and age: %d",
            $this->name,
            $this->nationalCode,
            $this->mobile,
            $this->age,
        ) . PHP_EOL; 
    }

}