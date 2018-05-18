<!DOCTYPE html>
<html>
    <head>
        <title>Search page</title>
    </head>
        <?php
            require_once 'User.php';
            require_once 'requires.php';
            session_start();
            
            $name = $_SESSION['user_id'];          
            $sql="SELECT * FROM userLogs WHERE userName='$name'";                    
            $result=mysqli_query($conn, $sql);
            if ($result)
            {
                echo "Welcome $name";
            }
                           
        ?>
        <form action="logs.php"><input type="submit"value="watch Logs"></form>
        <br/>
        <form action="download.php"><input type="submit" value="Download log function"></form>
        <br/>
        <form action="logout.php"><input type="submit" value="Logout"></form>
    </body>
</html>