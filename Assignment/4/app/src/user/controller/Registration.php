<?php

namespace App\src\user\controller;

class Registration {
    function getRegForm(): void {
        require __DIR__ . "/../view/registration.html";
    }

    function registerUser() {

    }
}