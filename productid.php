<?php

include "header.php";

?>

    <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit</p>
                                        <?php 
                                              include "conn.php";

                                              $user_id = $_GET['id'];
                                              $sql = "SELECT * FROM users WHERE user_id  = '$user_id'  " ;

                                              $res = mysqli_query($conn,$sql);
                             
                                              if (mysqli_num_rows($res) > 0) 
                                              { 
                                                while ($row = mysqli_fetch_assoc($res))
                                                {
                                                ?> 
                             
                                        
                                        
                                    <form class="mx-1 mx-md-4" method="post" action="">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <input type="hidden" name="user_id"  id="name" class=" form-control" value= "<?php echo $row['user_id'] ?>"  autocomplete="off">
                                                <input type="text" name="user_name"  id="name" class=" form-control" value= "<?php echo $row['user_name'] ?>"  autocomplete="off"> 
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="number"  id="mobile_no" name="mobile_no" class="form-control" value="<?php echo $row['mobile_no'] ?>"  autocomplete="off" />
                                                <label class="form-label" for="form3Example3c">Your Phone Number</label>
                                            </div>
                                        </div>

                                        
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text"  autocomplete="off" id="profile" name="profile" class="form-control"  value="<?php echo $row['profile'] ?>"/>
                                                <label class="form-label" for="form3Example4cd">Profile</label>
                                            </div>
                                        </div>

                                        
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                         <button type="submit" class="btn btn-primary btn-lg"
                                        name= "submit"         id="register">Edit</button> 
                                                <br>

                                              
                                        </div>
                                        <?php } } ?>
