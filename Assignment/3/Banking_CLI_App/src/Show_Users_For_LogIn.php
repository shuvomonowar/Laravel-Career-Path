<?php

declare(strict_types=1);

namespace Banking_CLI_App\src;

use Banking_CLI_App\src\admin\Admin_LogIn;
use Banking_CLI_App\src\customer\Customer_LogIn;

class Show_Users_For_LogIn
{
    private Admin_LogIn $ad_lg;
    private Customer_LogIn $cus_lg;
    private array $users = array(
        Users::ADMIN->value => "Admin",
        Users::CUSTOMER->value => "Customer"
    );

    function show_options(): void
    {
        while (true) {
            foreach ($this->users as $Users => $val) {
                printf("%d. %s\n", $Users, $val);
            }

            printf("%d. %s\n", 3, "Exit");

            printf("----------------\n");
            printf("Enter Login User Option: ");
            $select_option = readline();

            if($select_option === $this->users[Users::ADMIN->value] || $select_option === (string)Users::ADMIN->value) {
                $this->ad_lg = new Admin_LogIn();
                $this->ad_lg->login();
                break;
            }
            else if($select_option === $this->users[Users::CUSTOMER->value] || $select_option === (string)Users::CUSTOMER->value) {
                $this->cus_lg = new Customer_LogIn();
                $this->cus_lg->login();
                break;
            }
            else if($select_option == "3" || $select_option == "Exit"){
                printf("\nThank you!\n");
                break;
            }
        }
    }
}