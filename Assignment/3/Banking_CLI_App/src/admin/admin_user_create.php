<?php

namespace Banking_CLI_App\src\admin;

require_once "../../../vendor/autoload.php";

printf("Banking CLI APP\n");
printf("-------------------------------------------------\n");
printf("#################################################\n");
printf("-------------------------------------------------\n");
printf("Admin Registration".PHP_EOL);
printf("-------------------------------------------------".PHP_EOL);

$admin_reg = new Admin_Registration();
$admin_reg->registration();
