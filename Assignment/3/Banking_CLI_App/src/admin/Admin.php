<?php

declare(strict_types=1);

namespace Banking_CLI_App\src\admin;

class Admin
{
    private string $email;
    private string $password;

    function setEmail(string $email) {
        $this->email = $email;
    }

    function getEmail(): string {
        return $this->email;
    }

    function setPassword(string $password) {
        $this->password = $password;
    }

    function getPassword(): string {
        return $this->password;
    }
}