<?php

namespace Banking_CLI_App\src\customer;

class Customer_LogIn_Operation
{
    private string $registration_data_file_path = __DIR__ . "/model/customer_registration_data.json";
    private string $email;
    private string $password;
    private string $jsonData;
    private array $finalJsonData;

    function setUpLogInDetails(string $email, string $password): void {
        $this->email = $email;
        $this->password = $password;
        $this->jsonData = file_get_contents($this->registration_data_file_path, FILE_USE_INCLUDE_PATH);
        $this->finalJsonData = json_decode($this->jsonData, true);
    }

    function checkLogInSuccess(string $email, string $password): bool {
        $this->setUpLogInDetails($email, $password);

        for($i = 0; $i < sizeof($this->finalJsonData); $i++) {
            if($this->email === $this->finalJsonData[$i]["email"] and $this->password === $this->finalJsonData[$i]["password"]) {
                return true;
                break;
            }
            else {
                continue;
            }
        }
        return false;
    }
}