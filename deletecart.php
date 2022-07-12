<?php
 
    include "conn.php";
$user_id = $_GET['id'];
    $sql = "DELETE FROM cart WHERE id = '$user_id'";

    $res = mysqli_query($conn , $sql);

    if ($res) 
    {
        header("location:viewcart.php");
    }
    else {
        echo "error";
    }

?>