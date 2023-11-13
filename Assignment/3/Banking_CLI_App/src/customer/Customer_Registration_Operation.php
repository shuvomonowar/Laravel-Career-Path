<?php

namespace Banking_CLI_App\src\customer;

use Exception;

class Customer_Registration_Operation
{
    private string $registration_data_file_path = __DIR__ . "/model/customer_registration_data.json";
    private string $name;
    private string $email;
    private string $password;
    private string $prev_jsonData;
    private array $finalJsonData;
    private array $prev_finalJsonData;
    private array $mergedFinalJsonData;
    private string $mergedJsonData;


    function toCheckExistingUser(array $chkUsr): bool {
        for ($i = 0; $i < sizeof($chkUsr); $i++) {
            if($chkUsr[$i]["email"] === $this->email) {
                return true;
                break;
            }
            else {
                continue;
            }
        }

        return false;
    }

    function setUpRegistrationDetails(string $name, string $email, string $password): bool {
        $this->prev_jsonData = file_get_contents($this->registration_data_file_path);
        $this->prev_finalJsonData = json_decode($this->prev_jsonData, true);

        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        if($this->toCheckExistingUser($this->prev_finalJsonData)) {
            return false;
        }
        else {
            $this->finalJsonData["name"] = $this->name;
            $this->finalJsonData["email"] = $this->email;
            $this->finalJsonData["password"] = $this->password;
            $this->prev_finalJsonData[] = $this->finalJsonData;
            $this->mergedJsonData = json_encode($this->prev_finalJsonData, JSON_PRETTY_PRINT);
            file_put_contents($this->registration_data_file_path, $this->mergedJsonData);

            return true;
        }

    }

    function checkRegistrationSuccess(string $name, string $email, string $password): bool {
        if($this->setUpRegistrationDetails($name, $email, $password)) {
            return true;
        }
        else {
            return false;
        }
    }
}