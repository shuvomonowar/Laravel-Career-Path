<?php

namespace Banking_CLI_App\src\admin;

use Banking_CLI_App\src\LogIn;

class Admin_LogIn implements LogIn
{
    private string $email;
    private string $password;
    private Admin $admin;
    private array $logInfo;
    private Admin_LogIn_Operation $ad_lg_op;
    private bool $dcsn;

    function login(): void
    {
        while (true) {
            $this->admin = new Admin();

            printf("Enter email address: ");
            $this->email = readline();

            $this->admin->setEmail($this->email);
            $this->logInfo["email"] = $this->admin->getEmail();

            printf("Enter password: ");
            $this->password = readline();

            $this->admin->setPassword($this->password);
            $this->logInfo["password"] = $this->admin->getPassword();

            $this->ad_lg_op = new Admin_LogIn_Operation();
            $this->dcsn = $this->ad_lg_op->checkLogInSuccess($this->logInfo["email"], $this->logInfo["password"]);

            if ($this->dcsn === true) {
                printf("Login success".PHP_EOL);
                break;
            }
            else {
                printf("User is not exist".PHP_EOL);
            }
        }
    }
}