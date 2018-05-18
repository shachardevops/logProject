<!DOCTYPE html>
<html>
    <head>   
        <title>Page Title</title>
    <?php
        require_once 'requires.php';
    ?>
    </head>
    <body>
    To download the function click 
        <a href="download/logFunction.txt" download>
            <b>here</b>
        </a>
        <form action="login.php" method="post" id="theform">
            Go Back:<input type="button" value="User page" onclick="userPage()">
        </from>
    </body>
</html>