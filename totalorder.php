<?php

include "header.php";

?>

    <div classs = "container" >
            <div class="rows ">
                <div class="col-md-8">
                  <br>
                
                <?php 
                 include "conn.php";

                 $sql = " SELECT
                 u.user_id , u.user_name,  u.mobile_no , p.product_id , p.order_id , p.quantity , p.order_type , p.total , p.price
               FROM
                   users u
               JOIN products p ON
                   u.user_name = p.user_name ";

                 $res = mysqli_query($conn,$sql);

                 if (mysqli_num_rows($res) > 0) 
                 { ?> 
                 <div  class="CONTAINER" >
                                        
                    <table class= " table table-hover " >
  <thead>
    <tr>
      <th scope="col">User_Id</th>
      <th scope="col">User_Name</th>
      <th scope="col">Mobile_no</th>
      <th scope="col">Product_Id</th>
      <th scope="col">Order_Id</th>
      <th scope="col">Quantity</th>
  
  
  
  
        <th scope="col">Price</th>
      <th scope="col">Order_Type</th>
      <th scope="col">Total</th>
      

    </tr>
  </thead>
  <tbody>
  <h3 class="display-3">Total Orders</h3>



    <?php 
    while ($row = mysqli_fetch_assoc($res)) 
    {
    ?>                                
                                        <tr>
                                        <th scope="row"> <?php echo $row['user_id'] ?> </th>
                                        <td><?php echo $row['user_name'] ?> </td>
                                        <td><?php echo $row['mobile_no'] ?> </td>
                                        <td><?php echo $row['product_id'] ?> </td>
                                        <td><?php echo $row['order_id'] ?> </td>
                                        <td><?php echo $row['quantity'] ?> </td>
                                        <td><?php echo $row['price'] ?> </td>
                                        <td><?php echo $row['order_type'] ?> </td>
                                        <td><?php echo $row['total'] ?> </td>
                                        
                                        </tr>
   <?php } ?>
    <tr>



                <?php
                 }

                ?>
                </div>  
                </div></div></div><
                </body>
                </html>