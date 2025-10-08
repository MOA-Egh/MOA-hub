<?php

namespace App\Db;

require 'vendor/autoload.php';

class DbConnector {
    private $connection;

    public function __construct($host, $dbname, $username, $password) {
        try {
            $this->connection = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
