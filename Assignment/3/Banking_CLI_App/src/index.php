<?php

namespace Banking_CLI_App\src;

require_once "../../vendor/autoload.php";

printf("Banking CLI APP\n");
printf("-------------------------------------------------\n");
printf("#################################################\n");
printf("-------------------------------------------------\n");

$show_operation = new Show_Operations();
$show_operation -> show_options();