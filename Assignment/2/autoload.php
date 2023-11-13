<?php

spl_autoload_register(function ($className) {
    $base_dir = "./";

    require_once $base_dir.$className.".php";
});