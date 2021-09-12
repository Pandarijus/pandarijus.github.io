<?php

$emailOrUid = $_POST["user"];
$password = $_POST["password"];


require_once 'dbh.inc.php';
require_once 'functions.inc.php';


if ($array = getUserData($conn,$emailOrUid,$emailOrUid)){ #usersName,usersEmail,usersUid,usersPwd
    if($array["usersPwd"] == $password){
        #echo "WELL DONE. YOU ARE LOGGED IN NOW";
        session_start();
        $_SESSION["usersName"] = $array["usersName"];
        $_SESSION["usersEmail"] = $array["usersEmail"];
        $_SESSION["usersUid"] = $array["usersUid"];
        $_SESSION["usersPwd"] = $array["usersPwd"];
        goToWebsite("index.php?justLoggedIn","");
    }else{
        goToWebsite("login.php?wrongPaswrd","");
        #echo "The Password didn't mach";
    }

}else{
    goToWebsite("login.php?notInDB","");
    #echo "there is no user under that login";
}
