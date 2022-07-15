<?php

include "header.php";

?>


    <div classs = "container" >
            <div class="rows ">
                <div class="col-md-8">
                  <br>
                    
                
                <?php 
                 include "conn.php";

                 $sql = "SELECT * FROM cart  " ;

                 $res = mysqli_query($conn,$sql);

                 if (mysqli_num_rows($res) > 0) 
                 { ?> 
                 <div  class="CONTAINER" >
                                        
                    <table class= " table table-hover " >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User_Id</th>
      <th scope="col">Product_Id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    while ($row = mysqli_fetch_assoc($res)) 
    {
    ?>
                                        <tr>
                                        <th scope="row"> <?php echo $row['id'] ?> </th>
                                        <td><?php echo $row['user_id'] ?> </td>
                                        <td><?php echo $row['product_id'] ?> </td>
                                        <td><?php echo $row['quantity'] ?> </td>
                                        <td><a href="editcart.php?id=<?php echo  $row['id']; ?>" class="nav-link active" > Edit </a> </td>
                                        <td><a href="deletecart.php?id=<?php echo  $row['id']; ?>" class="nav-link active" > Delete </a> </td>
                                        </tr>
   <?php } ?>
    <tr>



                <?php
                 }

                ?>
                </div>
