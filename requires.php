<?php
$dbServerName = "18.188.102.109";

$dbUserName = "root";

$dbPassword = "1234567";

$dbName = "logproject";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

?>
<script>
function HomePage()
{
    var form=document.getElementById("theform");
    form.action="http://18.188.102.109";
    form.submit();
}

function userPage()
{
    var form=document.getElementById("theform");
    form.action="userPage.php";
    form.submit();
            
}
       
</script>


