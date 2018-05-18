<!DOCTYPE html>
<html>
    <head>
    
        <title>Home page</title>
        
       
    </head>

<?php
require_once 'requires.php';
session_start();
$message="";
if(isset($_POST["user_name"])&&$_POST["password"]) 
{
    $name=$_POST["user_name"];
    $password=$_POST["password"];
    $sql="SELECT * FROM `users` WHERE userName='$name' AND userpassword='$password'";
	$result = mysqli_query($conn,$sql);
	$row  = mysqli_fetch_array($result);
    if(is_array($row)) 
    {
        $_SESSION["user_id"] = $row['userName'];
        ?>
        <body onload="userPage()">
        
        <?php
    }
    else
    {
	    echo "Invalid Username or Password!";
	}
}
?>
<form action="login.php" method="post" id="theform">
	
	Username
	<input name="user_name" type="text" >
	Password:
	<input name="password" type="password"> 
    <input type="submit" name="login" value="Login" >	  
    <input type="button" value="Home" onclick="HomePage()"> 
     
    </form>
    </body>
</html>