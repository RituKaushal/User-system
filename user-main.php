<?php
class UserSystem{

    function __construct(){
        $this->UserRegister();
    }
    Public function UserRegister(){
        include_once('views/UserRegister.php');
    }
}
$Usersystem = new UserSystem();
