<?php

function anyErrorHappened($email,$name,$uid,$password,$password2,$conn){

    $error =
        (($password !== $password2) ||
        ( empty($email) ||  empty($name )|| empty($uid )||  empty($password)||  empty($password2)||  empty($conn))||
        (!preg_match("/^[a-zA-z0-9]*$/",$uid))||
        (!filter_var($email,FILTER_VALIDATE_EMAIL))||
        userAlreadyTaken($conn,$uid,$email));

    return $error;
}

function userAlreadyTaken($conn,$uid,$email){
    return false !== getUserData($conn,$uid,$email);

}


function getUserData($conn,$uid,$email){

    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        return false;
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$uid,$email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result)){
            //there is login data inside
            return $row;
        }else{
            return false;//no login in data base
        }
    }
    }



function createUser($email,$name,$uid,$password,$conn){
    $sql = "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        return false;
    }else{

        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$uid,$password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return true;
    }


}

function goToWebsite($url,$php = ".php"){
    $url = "location: ../" . $url . $php;
    header($url);
    exit();
}

function errorText($text){
    return "<h1 style='color:red;text-align: center';> $text </h1>";
}

function stylisedText($text,$type = "p",$color = "black",$additionalStyle ="",$centered = "text-align: center;"){
    return "<$type style =' color: $color;$centered $additionalStyle'> $text </$type>";
}
