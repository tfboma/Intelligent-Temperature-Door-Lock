<?php

include('../connnect.php');
mysqli_query($conn,"set names utf8");
$Username = $_GET['Username'];
$password = $_GET['password'];
$check = mysqli_query($conn,"select * from User where Username='$Username' and password = '$password'");
if($check)
{
    echo "success!";
}
else
{
    echo "failed!";
}

?>