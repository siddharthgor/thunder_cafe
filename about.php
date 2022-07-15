<?php

include "header.php";
require "conn.php";

if (isset($_POST['submit']))
{

    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];


    $sql = " INSERT INTO `cart` ( `user_id`, `product_id` , `quantity`) VALUES ('$user_id' , '$product_id'  , '$quantity') " ;

      $result = $conn->query($sql);

    if ($result == TRUE)
    {
        echo "Added To Cart ";
         header ( "location: index.php");

    }
    else 
    {
        echo "ERROR";

    } 

}

?>


    <section>
        <div class="container">
            <div class="rows justify-content-between">
                <div class="col-auto">
                    <h2>Welcome To Cart</h2>

                    <form class="cart-form" method="post" action="" onsubmit="confirm()">
                        <div class="container">
                            <div class="rows">
                                <div class="col-6">
                                    <label class="cartlabel">
                                        Your Name
                                    </label>
                                    <input type="text" class="user_id" name="user_id" placeholder="Your Name"  autocomplete="off">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="cartlabel">
                                        Your Order
                                    </label>
                                    <input type="text" class="product_id" name="product_id" placeholder="Order"  autocomplete="off"> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="cartlabel">
                                        Quantity &nbsp; &#160;
                                    </label>
                                    <input type="number" class="quantity" name="quantity" placeholder="Quantity"  autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="rows justify-content-center">
                            <div class="col-md-6 row-cols-sm-2">
                                <button class="btn-primary btn-block" onclick="confirm()" name="submit" type="submit">Order</button>
                            </div>
                            <div class="col-md-6 row-cols-sm-2">
                                <button class="btn-primary btn-block" name="view" type="button"><a href = "viewcart.php"> View </a> </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



   