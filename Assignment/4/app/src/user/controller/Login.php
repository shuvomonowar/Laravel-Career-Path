<?php

namespace App\src\user\controller;

class Login {
    function getLoginForm(): void {
        require __DIR__ . "/../view/login.html";
    }

    function userLogin() {

    }
}