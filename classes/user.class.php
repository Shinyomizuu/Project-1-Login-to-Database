<?php
enum Role: string {
    case USER = 'user';
    case ADMIN = 'admin';
    case EDITOR = 'editor'; 
}

class User{
    public $username;
    
    public $email;

    public $password;



    public function __construct(string $username, string $email, string $password, ){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
 
    }
}
?>