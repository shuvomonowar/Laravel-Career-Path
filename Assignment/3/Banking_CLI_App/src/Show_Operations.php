<?php

declare(strict_types=1);

namespace Banking_CLI_App\src;

class Show_Operations
{
    private array $operations = array(
        Operations::LOGIN->value => "Log In (Working both for customer and admin)",
        Operations::REGISTRATION->value => "Registration (Working only for customer)"
    );

    function show_options(): void
    {
        while (true) {
            foreach ($this->operations as $operation => $val) {
                printf("%d. %s\n", $operation, $val);
            }

            printf("%d. %s\n", 3, "Exit");

            printf("----------------\n");
            printf("Choose any one of them for further process: ");
            $select_option = readline();

            if($select_option === $this->operations[Operations::LOGIN->value] || $select_option === (string)Operations::LOGIN->value) {
                $login_users = new Show_Users_For_LogIn();
                $login_users->show_options();
                break;
            }
            else if($select_option == $this->operations[Operations::REGISTRATION->value] || $select_option === (string)Operations::REGISTRATION->value) {
                $reg_users = new Show_Users_For_Registration();
                $reg_users->show_options();
                break;
            }
            else if($select_option == "3" || $select_option == "Exit"){
                printf("\nThank you!\n");
                break;
            }
        }
    }
}