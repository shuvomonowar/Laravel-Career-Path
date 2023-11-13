<?php

declare(strict_types=1);

namespace Banking_CLI_App\src\customer\services;

class Show_Services
{
    const transactions = 1;
    const deposit = 2;
    const withdraw = 3;
    const transfer = 4;
    const balance = 5;
    const logout = 6;

    private array $services = array(
        self::transactions => "Show Transactions",
        self::deposit => "Deposit Money",
        self::withdraw => "Withdraw Money",
        self::transfer => "Transfer Money",
        self::balance => "Check Balance",
        self::logout => "Log Out"
    );

    function show_options(): void
    {
        while (true) {
            printf("Welcome to your portal. Enjoy the below services".PHP_EOL);
            printf("------------------------------------------------".PHP_EOL);

            foreach ($this->services as $service => $val) {
                printf("%d. %s".PHP_EOL, $service, $val);
            }

            printf("Choose any one of the services for further process: ");
            $select_option = readline();

            if($select_option === $this->services[self::transactions] || $select_option === (string) self::transactions) {

                break;
            }
            else if($select_option === $this->services[self::deposit] || $select_option === (string) self::deposit) {

                break;
            }
            else if($select_option === $this->services[self::withdraw] || $select_option === (string) self::withdraw) {

                break;
            }
            else if($select_option === $this->services[self::transfer] || $select_option === (string) self::transfer) {

                break;
            }
            else if($select_option === $this->services[self::balance] || $select_option === (string) self::balance) {

                break;
            }
            else if($select_option === $this->services[self::logout] || $select_option === (string) self::logout) {
                printf(PHP_EOL."Thank you, we're eagerly waiting for your comeback.".PHP_EOL);
                break;
            }
        }
    }
}