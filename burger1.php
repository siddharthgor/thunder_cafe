<?php

include "header.php";
if (isset($_POST['submit'])){
  $product_name = $_POST['product_name'];

  $sql = "INSERT INTO `menu`( `product_name`)  VALUE ('$product_name')";

  $res = $conn->query($sql);
print_r($res);
die();
  if ($res == TRUE){
    return true;
  }
  else{
    return false ; 
  }
}
?>
<br>
<br>

<div class="container">
    <div class="rows justify-content-between">
        <div class="col-auto">

      <!-- Carousel wrapper -->
<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    
  </div>

  <!-- Inner -->
  <div class="carousel-inner"> 
    <!-- Single item -->
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src="images/1046913928-preview.mp4" type="video/mp4" />
      </video>
  
    
    <div class="container">
        <div class="rows">
            <div class="col">
                <p class="p-001"> <span class="span" name="tandoori_burger">Tandoori Burger</span>  
                <br> <article> 
                    Tandoori Veggie Burger made with sweet potatoes, black beans, oats and amazing tandoori flavors, topped with minty yogurt sauce and crispy fried pickled jalapeños.

                    This is not your average burger. This burger is an ultimate veggie burger. The gluten-free and dairy-free patty holds amazing nutrients like sweet potatoes, black beans, gluten free rolled oats and amazing tandoori flavors. Oh and when there is tandoori anything, how can we not have minty yogurt sauce to complement the tandoori flavors. Yes, that is right. This recipe includes spicy minty garlicky yogurt sauce. If it is too much to make, you can simply use store bought jalapeño ranch to make your life a bit easy! </article></p>
            </div>
            <div class="addtocart">
              <form action="" method="POST">
                <input type="hidden" name="product_name" value="tandoori_burger" id="product_name">
                <input type="hidden" name="product_id"  id="product_id">
                <button type="submit" onclick="addtocart()">Add To Cart</button>
              </form>
            </div>
        </div>
  </div>
  
  
</div>
</div>
</div>
<script>
  function addtocart () {
    var product_id = document.getElementById("product_id");
     console.log(product_id);
  }
</script>