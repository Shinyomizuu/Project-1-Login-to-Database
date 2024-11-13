<?php
class Database {
    private $mysqli;

    public function __construct($host, $dbname, $user, $password) {
        $this->mysqli = new mysqli($host, $user, $password, $dbname);

        if ($this->mysqli->connect_errno) {
            throw new Exception("Failed to connect to MySQL: " . $this->mysqli->connect_error);
        }
    }

    public function getDatabase() {
        return $this->mysqli;
    }
}
?>