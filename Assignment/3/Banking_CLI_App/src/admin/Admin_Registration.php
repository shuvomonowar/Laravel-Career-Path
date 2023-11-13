<?php

namespace Banking_CLI_App\src\admin;

use Banking_CLI_App\src\Registration;

class Admin_Registration implements Registration
{
    private string $email;
    private string $password;
    private Admin $admin;
    private array $regInfo;
    private Admin_Registration_Operation $ad_reg_op;
    private bool $dcsn;

    function registration(): void
    {
        $this->admin = new Admin();

        printf("Enter email address: ");
        $this->email = readline();

        $this->admin->setEmail($this->email);
        $this->regInfo["email"] = $this->admin->getEmail();

        printf("Enter password: ");
        $this->password = readline();

        $this->admin->setPassword($this->password);
        $this->regInfo["password"] = $this->admin->getPassword();

        $this->ad_reg_op = new Admin_Registration_Operation();
        $this->dcsn = $this->ad_reg_op->checkRegistrationSuccess($this->regInfo["email"], $this->regInfo["password"]);

        if ($this->dcsn === true) {
            printf("Registration successfully done".PHP_EOL.PHP_EOL);
            printf("Please login the admin portal".PHP_EOL);
            printf("-----------------------------".PHP_EOL);
            $admin_login = new Admin_LogIn();
            $admin_login->login();
        }
    }
}