<?php
$dbServerName = "52.28.78.77";

$dbUserName = "root";

$dbPassword = "";

$dbName = "logproject";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

?>
<script>
function HomePage()
{
    var form=document.getElementById("theform");
    form.action="http://52.28.78.77";
    form.submit();
}

function userPage()
{
    var form=document.getElementById("theform");
    form.action="userPage.php";
    form.submit();
            
}
       
</script>


