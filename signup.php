<!DOCTYPE html>
<html>
<head>
    <title>add user</title>
</head>
<body>
    <?php
        
        require_once 'requires.php';     
            if (isset($_POST['name'])&&
            isset($_POST['password1'])&&
            isset($_POST['password2'])&&
            $_POST['password1']==$_POST['password2']) 
            {
                $name = $_POST['name'];
                $password = $_POST['password1'];
                $sql="SELECT * FROM `users` WHERE userName='$name'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)==1)
                {
                   echo"name already exists";
                }
                else
                {
                    mysqli_query($conn,("CREATE USER '$name'@'%' IDENTIFIED BY '$password'"));
                    
                    mysqli_query($conn,("GRANT SELECT, INSERT ON `logproject`.* TO '$name'@'%'"));
                   
                    $sql="INSERT INTO users(userName, userPassword) VALUES('$name', '$password');";
                    if (mysqli_query($conn, $sql))
                    {
                        echo "The user created ";    
                    }
                    else 
                    {
                        echo "Error creating the user ".mysqli_error($conn)."<br/>";
                    }  
                }
                mysqli_close($conn);
            }
            if (isset($_POST['password1'])&&
            isset($_POST['password2'])&&
            $_POST['password1']!=$_POST['password2']) 
            {
                echo "Incorrect password! try again.";
            }
        ?>
        <form action="signup.php" id="theform" method="post">

            Name:
            <input type="text" name="name">
            <br/> Password:
            <input type="password" name="password1">
            <br/> Password again:
            <input type="password" name="password2">
            <br/>
            <input type="submit">
            <br/>
            <input type="button" value="Home" onclick="HomePage()">
            <br/>
        </form>
</body>

</html>