<?php

declare(strict_types=1);

namespace Banking_CLI_App\src\customer;

class Customer
{
    private string $name;
    private string $email;
    private string $password;

    function setName(string $name): void {
        $this->name = $name;
    }

    function getName(): string {
        return $this->name;
    }

    function setEmail(string $email): void {
        $this->email = $email;
    }

    function getEmail(): string {
        return $this->email;
    }

    function setPassword(string $password): void {
        $this->password = $password;
    }

    function getPassword(): string {
        return $this->password;
    }
}