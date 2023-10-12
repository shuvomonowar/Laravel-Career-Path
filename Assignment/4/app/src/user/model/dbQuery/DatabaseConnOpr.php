<?php

namespace App\src\user\model\dbQuery;

use PDO;
use PDOException;

class DatabaseConnOpr
{
    private string $serverName = "localhost";
    private string $dbName = "barta";
    private string $username = "root";
    private string $password = "admin";
    private PDO $conn;

    function __construct() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->serverName. ";dbname=" . $this->dbName. "", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            printf("Connection Successful".PHP_EOL);
        } catch (PDOException $e) {
            printf("Connection failed ". $e->getMessage(). PHP_EOL);
        }
    }

    function createTable(string $query): void {
        try {
            $this->conn->exec($query);
            printf("Table creation successful".PHP_EOL);
        } catch (PDOException $e) {
            printf("Error found when creating table ". $e->getMessage(). PHP_EOL);
        }
    }
}