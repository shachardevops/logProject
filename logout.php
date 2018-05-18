<!DOCTYPE html>
<html>
<head></head>
<body>  
    <?php
        require_once 'requires.php';
        session_start();
        $_SESSION["user_id"] = "";
        session_destroy();       
        echo "Logout successfully";
    ?>
        <form action="login.php" method="post" id="theform">
            <input type="button" value="Home" onclick="HomePage()"> 
        </form>
</body>
</html>