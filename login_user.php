<?php

use sarassoroberto\usm\model\UserModel;
use sarassoroberto\usm\service\UserSession;

require "./__autoload.php";


if ($_SERVER['REQUEST_METHOD']==='POST') {
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
    $cryptpassword = md5($password);
    
    if($email && $cryptpassword){
        $user = (new UserSession())->autenticate($email,$cryptpassword);
        
        if(is_null($user)){ $msg = "credenziali errate"; }else{
            header("location: list_users.php");
        }
        
    }else{
        $msg = "compila i campi in modo corretto";
    }

}

include './src/view/login_view.php';