<?php

namespace Banking_CLI_App\src\customer;

use Banking_CLI_App\src\Registration;

class Customer_Registration implements Registration
{
    private string $name;
    private string $email;
    private string $password;
    private Customer $customer;
    private array $regInfo;
    private Customer_Registration_Operation $cus_reg_op;
    private bool $dcsn;

    function registration(): void
    {
        while (true) {
            printf("Customer Registration".PHP_EOL);
            printf("-------------------------------------------------".PHP_EOL);

            $this->customer = new Customer();

            printf("Enter Name: ");
            $this->name = readline();

            $this->customer->setName($this->name);
            $this->regInfo["name"] = $this->customer->getName();

            printf("Enter email address: ");
            $this->email = readline();

            $this->customer->setEmail($this->email);
            $this->regInfo["email"] = $this->customer->getEmail();

            printf("Enter password: ");
            $this->password = readline();

            $this->customer->setPassword($this->password);
            $this->regInfo["password"] = $this->customer->getPassword();

            $this->cus_reg_op = new Customer_Registration_Operation();
            $this->dcsn = $this->cus_reg_op->checkRegistrationSuccess($this->regInfo["name"], $this->regInfo["email"], $this->regInfo["password"]);

            if ($this->dcsn === true) {
                printf("Registration successfully done".PHP_EOL.PHP_EOL);
                printf("Please login to the customer portal".PHP_EOL);
                printf("-----------------------------------".PHP_EOL);
                $customer_login = new Customer_LogIn();
                $customer_login->login();
                break;
            }
            else {
                printf("User is already exist, please try another email".PHP_EOL);
            }
        }
    }
}