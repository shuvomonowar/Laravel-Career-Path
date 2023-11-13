<?php

declare(strict_types=1);

namespace Banking_CLI_App\src;

use Banking_CLI_App\src\customer\Customer_Registration;


class Show_Users_For_Registration
{
    private Customer_Registration $cus_reg;
    private array $users = array(
        Users::CUSTOMER->value => "Customer"
    );

    function show_options(): void
    {
        while (true) {
            foreach ($this->users as $Users => $val) {
                printf("%d. %s\n", $Users-1, $val);
            }

            printf("%d. %s\n", 2, "Exit");

            printf("----------------\n");
            printf("Enter Registration Option: ");
            $select_option = intval(readline());
            $final_select_option = (string)($select_option+1);

            if($final_select_option === $this->users[Users::CUSTOMER->value] || $final_select_option === (string)Users::CUSTOMER->value) {
                $this->cus_reg = new Customer_Registration();
                $this->cus_reg->registration();
            }
            else if($select_option == "2" || $select_option == "Exit"){
                printf("\nThank you!\n");
                break;
            }
        }
    }
}