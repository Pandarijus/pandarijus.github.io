<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <title>CO</title>

</head>
<body>

<?php
session_start();
include_once 'inc/functions.inc.php'
?>

<div id = "header">
    <div id = "padd">
        <a href="index.php" style = "color:white;font-size:20px">isi</a>
        <a href="signUp.php" style = "color:white;font-size:20px">sus</a>
        <a href="login.php" style = "color:white;font-size:20px">lul</a>
        <?php
        if(isset($_SESSION["usersUid"])){
            echo "<a href='inc/logout.inc.php' style = 'color:white;font-size:20px'>löl</a>";
        }
        ?>
    </div>

</div>