<?php

namespace App\src;

require_once __DIR__ . "/../../vendor/autoload.php";

use App\src\user\model\dbQuery\DatabaseConnOpr;
use App\src\user\model\dbQuery\DatabaseOperationDDL;

(new DatabaseOperationDDL((new DatabaseConnOpr())));
