<?php
include_once 'header.php';

if( isset ($_GET["wrongPaswrd"])){#"login.php?wrongPaswrd"notInDB
    echo errorText("The Password didn't mach");
}else if(isset ($_GET["notInDB"])){
    echo errorText("There is no user under that login");
}
?>



<div id="main">
    <form action="inc/login.inc.php" method="post" >
        <h1>Login</h1>
        <input type="text" name="user" placeholder="Email/Username...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form>
</div>

</body>
</html>
