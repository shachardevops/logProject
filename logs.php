<html>
    <head>
</head>
<body>
<?php
    require_once 'User.php';
    require_once 'requires.php';
    session_start();
    $name = $_SESSION['user_id'];          
    $sql="SELECT * FROM userLogs WHERE userName='$name'";                    
    $result=mysqli_query($conn, $sql);
    if ($result)
    {   
        echo '<table border="1"><tr><th>Name</th><th>Log</th></tr>';
        while ($row = mysqli_fetch_array($result))
        {                                                                
            $user=new User ($row,$conn);
            echo "<tr><td>".$user->getLogTitle()."</td>";                            
            echo "<td>".$user->getLogDescription()."</td></tr>";
        }
        echo "</table>";
    }
    else 
        echo "Error cant find logs".mysqli_error($conn)."<br/>";

    mysqli_close($conn);     
?>
<form action="login.php" method="post" id="theform">
<input type="button" value="User page" onclick="userPage()">
</from>
</body>
</html>