<?php

$servername = "localhost" ;
$username = "root";
$password = "";
$databasename = "thunder_cafe";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if ($conn == true)
{
    // echo "Connected";
}
 
?>