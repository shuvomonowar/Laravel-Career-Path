<?php

namespace Banking_CLI_App\src\customer;

use Banking_CLI_App\src\customer\services\Show_Services;

class Customer_LogIn
{
    private string $email;
    private string $password;
    private Customer $customer;
    private array $logInfo;
    private Customer_LogIn_Operation $cus_lg_op;
    private bool $dcsn;
    private Show_Services $show_service;

    function login(): void {
        while(true) {
            printf("Customer Login portal".PHP_EOL);
            printf("---------------------".PHP_EOL);

            $this->customer = new Customer();

            printf("Enter email address: ");
            $this->email = readline();

            $this->customer->setEmail($this->email);
            $this->logInfo["email"] = $this->customer->getEmail();

            printf("Enter password: ");
            $this->password = readline();

            $this->customer->setPassword($this->password);
            $this->logInfo["password"] = $this->customer->getPassword();

            $this->cus_lg_op = new customer_LogIn_Operation();
            $this->dcsn = $this->cus_lg_op->checkLogInSuccess($this->logInfo["email"], $this->logInfo["password"]);

            if ($this->dcsn === true) {
                printf("Login success".PHP_EOL);
                $this->show_service = new Show_Services();
                $this->show_service->show_options();
                break;
            }
            else {
                printf("User is not exist".PHP_EOL);
            }
        }
    }
}