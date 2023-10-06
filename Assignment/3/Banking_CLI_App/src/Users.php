<?php

namespace Banking_CLI_App\src;

enum Users: int {
    case ADMIN = 1;
    case CUSTOMER = 2;
}