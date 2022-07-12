<?php
 
    include "conn.php";
$user_id = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id = '$user_id'";

    $res = mysqli_query($conn , $sql);

    if ($res) 
    {
        header("location:view.php");
    }
    else {
        echo "error";
    }

?>