<?php

if(isset($_POST["submit"])){//check if he got here the right way

    $email = $_POST["email"];
    $name = $_POST["name"];
    $uid = $_POST["uid"];
    $password = $_POST["password"];
    $password2 = $_POST["repeatPassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(anyErrorHappened($email,$name,$uid,$password,$password2,$conn)){
        stayAtSignUpBecauseErrorHappened();
    }else{
        if(createUser($email,$name,$uid,$password,$conn)){
            goToWebsite("login");
        }else{
            stayAtSignUpBecauseErrorHappened();
        }
    }

}else{
    goToWebsite("signUp");
}

function stayAtSignUpBecauseErrorHappened(){
    goToWebsite("signUp.php?error","");
}

