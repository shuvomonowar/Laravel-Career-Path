<?php

namespace Banking_CLI_App\src\admin;

class Admin_Registration_Operation
{
    private string $registration_data_file_path = __DIR__ . "/model/admin_registration_data.json";
    private string $email;
    private string $password;
    private string $jsonData;
    private array $finalJsonData;

    function setUpRegistrationDetails(string $email, string $password): void {
        $this->email = $email;
        $this->password = $password;
        $this->finalJsonData["email"] = $this->email;
        $this->finalJsonData["password"] = $this->password;
        $this->jsonData = json_encode($this->finalJsonData);
        file_put_contents($this->registration_data_file_path, $this->jsonData);
    }

    function checkRegistrationSuccess(string $email, string $password): bool {
        $this->setUpRegistrationDetails($email, $password);

        return true;
    }
}