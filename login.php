<?php

include "header.php";
session_start();
require "conn.php";

if (isset($_POST['submit'])) {

    // $user_name = mysqli_real_escape_string ( $conn, $_POST['user_name']);
    $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
    $password =  mysqli_real_escape_string($conn,md5( $_POST['password']));
    // $profile = mysqli_real_escape_string($conn,$_POST['profile']);
    


    $s = " SELECT * FROM users WHERE  mobile_no = '$mobile_no' && password = '$password' ";

    $ss = mysqli_query($conn, $s);

    $num = $ss->num_rows;

    if ($num == 1) {

        
        // $_SESSION = $user_name;
        // $message = "Welcome '$_SESSION'";
        header("location:order2.php"); 

    } else {

        $_SESSION = $mobile_no;
        $message = "Phone Number does not exist";
        header ("location: order.php?error=1&message=$message");                                                                                                              
                                                
    }
}

?>





    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <h1>

                                </h1>
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login </p>
                                <?php if (isset($_GET['message']) && !empty(trim($_GET['message']))) { ?>
                                    <div class="alert alert-<?=(isset($_GET['error']) && $_GET['error'] == 1) ? "warning" : "success";?>"><?= $_GET['message'] ?></div>
                                <?php } ?>  
                                <form class="mx-1 mx-md-4" method="post" action="">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="number" id="mobile_no" name="mobile_no"  autocomplete="off" class="form-control"  required autocomplete="off" />
                                            <label class="form-label" for="form3Example3c">Your Phone Number</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="password" name="password"  autocomplete="off" class="form-control" required autocomplete="off" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>



                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""   autocomplete="off" id="form2Example3c" required />
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg" name="submit"  onclick="return confirm()" id="register">Login</button>
                                        <br>


                                    </div>
                                    <small style="text-align:center;" class="LOGIN1"> Not an User ?? </small>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                                        <a href="order.php"> <button type="button" class="btn btn-primary btn-lg" name="login" id="Login">Sign Up</button> </a>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="images/content9434.jpg" class="img-fluid" alt="Sample image">

                            </div>


                            <script>
                                function confirm(){
                                    alert("Are You Confirm");
                                }
                            </script>