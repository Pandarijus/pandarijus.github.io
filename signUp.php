<?php
include_once 'header.php';

if(isSet($_GET["error"])){
    echo errorText("ERROR");//more error handling
}
?>



<div id="main">
    <form action="inc/signUp.inc.php" method="post" >
        <h1>Sign Up</h1>
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">
        <input type="password" name="repeatPassword" placeholder="Repeat Password...">
        <button type="submit" name="submit">Submit</button> <!-- Everything with a name gets submitted -->

    </form>
</div>

</body>
</html>
