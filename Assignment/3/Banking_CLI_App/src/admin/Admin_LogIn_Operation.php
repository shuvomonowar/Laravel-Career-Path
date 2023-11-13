<?php

namespace Banking_CLI_App\src\admin;

class Admin_LogIn_Operation
{
//    private string $registration_data_file_path = "C:/Users/monow/OneDrive/Desktop/CW/Laravel Career Path/Assignment/3/Banking_CLI_App/src/admin/model/admin_registration_data.json";
    private string $registration_data_file_path = __DIR__ . "/model/admin_registration_data.json";
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

        if($this->email === $this->finalJsonData["email"] and $this->password === $this->finalJsonData["password"]) {
            return true;
        }
        else {
            return false;
        }
    }
}