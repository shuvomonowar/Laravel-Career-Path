#!/usr/bin/env php

<?php

/*
require_once "./Show_Options.php";
require_once "./options.php";
require_once "./Add_Income.php";
require_once "./View_Income.php";
require_once "./categories.php";
require_once "./Income.php";
require_once "./Data_Store.php";
require_once "./Add_Expense.php";
require_once "./Expense.php";
require_once "./View_Expense.php";
require_once "./View_Savings.php";
require_once "./View_Categories.php";
*/

require_once "./autoload.php";


printf("Income and Expense CLI APP\n");
printf("---------------------------\n");
printf("###########################\n");
printf("---------------------------\n\n");


$opt = new Show_Options();
$opt->show_options();


