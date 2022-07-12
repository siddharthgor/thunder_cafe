<div classs = "container" >
            <div class="rows justify-content-center">
                <div class="col-md-12">
                
                <?php 
                 include "conn.php";

                 $sql = "SELECT * FROM users  " ;

                 $res = mysqli_query($conn,$sql);

                 if (mysqli_num_rows($res) > 0) 
                 { ?>
                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User_Id</th>
      <th scope="col">User_Name</th>
      <th scope="col">Mobile_no</th>
      <th scope="col">Profile</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>



                <?php
                 }

                ?>