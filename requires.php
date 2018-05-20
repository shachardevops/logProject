<?php
$dbServerName = "sql142.main-hosting.eu";//18.188.102.109:3306";

$dbUserName = "	u597931953_root";//root";

$dbPassword = "1234567";

$dbName = "u597931953_logpr";//logproject";

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


