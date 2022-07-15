<?php

include "header.php";

?>


    <div classs = "container" >
            <div class="rows ">
                <div class="col-md-8">
                  <br>
                
                <?php 
                 include "conn.php";

                 $sql = "SELECT * FROM users  " ;

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
      <th scope="col">Profile</th>
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
                                        <th scope="row"> <?php echo $row['user_id'] ?> </th>
                                        <td><?php echo $row['user_name'] ?> </td>
                                        <td><?php echo $row['mobile_no'] ?> </td>
                                        <td><?php echo $row['profile'] ?> </td>
                                        <td><a href="edit.php?id=<?php echo  $row['user_id']; ?>" class="nav-link active" > Edit </a> </td>
                                        <td><a href="delete.php?id=<?php echo  $row['user_id']; ?>" class="nav-link active" > Delete </a> </td>
                                        </tr>
   <?php } ?>
    <tr>



                <?php
                 }

                ?>
                </div>