<?php

namespace App\src\user\model\dbQuery;

class DatabaseOperationDDL
{
    private DatabaseConnOpr $dbConn;
    function __construct(DatabaseConnOpr $dbConn) {
        $file = glob(__DIR__ . "/../data/DDL/*");
        foreach ($file as $item) {
            if (is_file($item)) {
                $query = file_get_contents($item);
                $dbConn->createTable($query);
            }
        }
    }
}