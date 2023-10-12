<?php 

namespace App\src\route;

use App\src\user\controller\Login;
use App\src\user\controller\Registration;

class Routes {
    private Router $router;
    private Registration $register;
    private Login $login;

    function __construct() {
        $this->router = new Router();
        $this->router->get("user_login", function() {
            $this->login = new Login();
            $this->login->getLoginForm();
        });

        $this->router->post("user_login", function() {

        });

        $this->router->get("user_register", function() {
            $this->register = new Registration();
            $this->register->getRegForm();

        });

        $this->router->post("user_register", function() {

        });

        $this->router->run();
    }
    
}