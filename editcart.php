<?php 

include "header.php";

?>

<?php

session_start();
if(isset($_POST['submit']))

{

include "conn.php";

$id = $_GET['id'];
$user_id = $_POST['user_id'];
$product_id =$_POST['product_id'];
$quantity =$_POST['quantity']; 

$s = " SELECT * FROM  cart WHERE  id = '$id' " ;

    $ss = mysqli_query($conn,$s);

    $num = $ss->num_rows;

    
       

    $sql = " UPDATE cart SET  user_id = '$user_id' ,  product_id = '$product_id' , quantity ='$quantity' WHERE id = '$id' " ;

      $result = $conn->query($sql);

    if ($result == TRUE)
    {
        echo "DATA INSERTED ";
        header ( "location:viewcart.php");

    }
    else 
    {
        echo "ERROR";

    }
   
    

}
?>





        <br>
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

                                              $id = $_GET['id'];
                                              
                                              
                                              $sql = "SELECT * FROM cart WHERE id = '$id'  " ;

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
                                            <input type="hidden" name="id"  id="name" class=" form-control" value= "<?php echo $row['id'] ?>"  autocomplete="off">
                                                <input type="text" name="user_id"  id="name" class=" form-control" value= "<?php echo $row['user_id'] ?>"  autocomplete="off"> 
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text"  id="product_id  " name="product_id" class="form-control" value="<?php echo $row['product_id'] ?>"  autocomplete="off" />
                                                <label class="form-label" for="form3Example3c">Product</label>
                                            </div>
                                        </div>

                                        
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="quantity" name="quantity" class="form-control"  value="<?php echo $row['quantity'] ?>"  autocomplete="off" >
                                                <label class="form-label" for="form3Example4cd">Quantity

                                                </label>
                                            </div>
                                        </div>

                                        
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                         <button type="submit" class="btn btn-primary btn-lg"
                                        name= "submit"         id="register">Edit</button> 
                                                <br>

                                              
                                        </div>

                                        <small style = "text-align:center;" class="LOGIN1"> ALready an User ?? </small>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
 
                                       <a href="login.php"> <button type="button" class="btn btn-primary btn-lg"
                                        name= "login"         id="Login">Login</button> </a>
                                                <br>

                                              
                                        </div> 

                                          

                                    </form>
                                        <?php } } ?>                                                        
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="images/content9434.jpg" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>


    <script>



    </script>
</body>

</html>







