<?php

include('../connnect.php');
mysqli_query($conn,"set names utf8");
$Username = $_GET['Username'];
$password = $_GET['password'];
$exe = mysqli_query($conn,"insert int User (Username,password)values('$Username','$password')");
if($exe)
{
    echo "registration success!";
}
else
{
    echo "registration failed!";
}

?>