<?php
class Database {
    private $mysqli;
    //test 
    public function __construct() {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->mysqli->connect_errno) {
            throw new Exception("Failed to connect to MySQL: " . $this->mysqli->connect_error);
        }
        else{
            echo("Connection successful");
        }
        
    }

    public function getDatabase() {
        return $this->mysqli;
    }

    public function createUser($username,$password, $password_repeat, $email) {

        if($password_repeat == $password_repeat){
            return "Die Passwörter stimmen nicht überein";
        }

    
    }

    public function dataBaseExist(){
        
    }

    public function __destruct() {
        $this->mysqli->close();
    }

    

}
?>