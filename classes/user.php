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

    public Role $role;   


    public function __construct(string $username, string $email, string $password, Role $role = Role::USER){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }


    public function getRole(): Role {
        return $this->role;
    }

}

?>