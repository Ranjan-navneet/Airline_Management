<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "placement1";

$conn = mysqli_connect($servername, $username, $password, $db , 3309);
if($conn)
{
   echo "Connection Established";
}
else
{
    echo "Connection failed";
}
?>