<?php

include "header.php";

?>

<?php

require "conn.php";

if (isset($_POST['submit']))
{

    $user_name = $_POST['user_name'];
    $order_id = $_POST['order_id'];
    $price = $_POST['price'];
    $order_type =$_POST['order_type'];
    $quantity = $_POST['quantity'];
    $total = $price*$quantity ;
 

    $sql = " INSERT INTO `products` ( `user_name`, `order_id`, `price` , `order_type` , `quantity` , `total`) VALUES ('$user_name' , '$order_id' , '$price' , '$order_type' , '$quantity','$total') " ;

      $result = $conn->query($sql);

    if ($result == TRUE)
    {
        echo "Order Placed ";
         header ( "location: totalorder.php");

    }
    else 
    {
        echo "ERROR";

    }

    
}

?>






<section>


<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Welcome</h3>
            <p class="blue-text">Sumbit Your Order Details <br></p>
            <div class="card">
                <h5 class="text-center mb-4">Thunder Cafe</h5>
                <form class="form-card" action="" method = "Post" >
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"> Name<span class="text-danger"> *</span></label> <input type="text" id="user_name" name="user_name" placeholder="" required onblur="validate(1)" autocomplete="off"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Order<span class="text-danger"> *</span></label> <input type="text" id="order_id" autocomplete="off" name="order_id" placeholder=" " onblur="validate(2)" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Price <span class="text-danger"> *</span></label> <input type="text" id="price" autocomplete="off" name="pri" placeholder="" onblur="validate()" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Order Type<span class="text-danger"> *</span></label> <input type="text" id="order_type" name="order_type" placeholder="" onblur="validate()" required autocomplete="off"> </div>
                    </div>
                    
                    <div class="form-group col-sm-10 flex-column d-flex"> <label class="form-control-label px-3">Quantity <span class="text-danger"> *</span></label> <input type="text" id="quantity" name="quantity" placeholder="" onblur="validate(5)" required autocomplete="off">
                    <input type="hidden" id="total" name="total" placeholder="" required onblur="validate(5)"> 
                </div>
                    
                   

                    <div class="row justify-content-center">
                        <div class="form-group col-sm-12"> <button name="submit" type="submit" onclick="confirm()" class="btn-block btn-primary">Order</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function validate(val) {
    v1 = document.getElementById("user_name");
    v2 = document.getElementById("order_id");
    v3 = document.getElementById("pri");
    v4 = document.getElementById("order_type");
    v5 = document.getElementById("quantity");
    v6 = document.getElementById("");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;

    if(val>=1 || val==0) {
        if(v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        }
        else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=3 || val==0) {
        if(v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        }
        else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
    if(val>=4 || val==0) {
        if(v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        }
        else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if(val>=5 || val==0) {
        if(v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        }
        else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if(val>=6 || val==0) {
        if(v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        }
        else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

    return flag;
}

</script>
