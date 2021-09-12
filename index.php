<?php
    include_once 'header.php';
    if(isset($_GET["justLoggedIn"]))
        echo stylisedText("Hello ".$_SESSION["usersUid"],"h1","black");
?>



    <div id="main">
        <h1>Main</h1>
    </div>

    <?php

    if(isset($_SESSION["usersUid"]))
    echo stylisedText(session_encode(),"h2","gray")
    ?>


</body>
</html>