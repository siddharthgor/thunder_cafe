<?php 

include "header.php";

?>
<body >
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <img src="images/pizza.png" class="imga" style="width:10% ;">
                <h2>Pizza</h2>
                <ul class="li1">
                    <li class="li2"><a href="pizza1.php">Italian Pizza</a></li>
                    <li class="li2"><a href="pizza2.php">Cheese Brust Pizza</a></li>
                    <li class="li2"><a href="pizza3.php">Paneer Tika Pizza</a></li>
                    <li class="li2"><a href="pizza4.php">Margherita Pizza</a></li>
                </ul>
            </div>
            <br>
            <br>
            <div class="col">
                <br>
                <img src="images/burger.png" class="imga" style="width:10% ;" alt="">
                <h2>Burger</h2>
                <ul class="li1">
                    <li class="li2"><a href="burger1.php">Tandoori Burger</a></li>
                    <li class="li2"><a href="burger2.php">Cheese Burger</a></li>
                    <li class="li2"><a href="burger3.php">Paneer Tika Burger</a></li>
                    <li class="li2"><a href="burger4.php"> Veg Burger</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="images/coffee-cup.png" class="img" style="width:10% ;" alt="">
                <h2>Coffee</h2>
                <ul class="li1">
                    <li class="li2"><a href="coffee1.php">Regular Cappuccino</a></li>
                    <li class="li2"><a href="coffee2.php">Caremel Blend</a></li>
                    <li class="li2"><a href="coffee3.php">Espresso</a></li>
                    <li class="li2"><a href="coffee4.php">Cafe Latte</a></li>
                </ul>
            </div>

        </div>
    </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col align-items-center">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                                <img src="images/istockphoto-670957540-170667a.jpg" class="d-block w-100" alt="..."
                                    style="height:500pt ;width:50%;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Low-Waste-2.png" class="d-block w-100" alt="..."
                                    style="height:500pt ;width:50%;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/910242.jpg" class="d-block w-100" alt="..."
                                    style="height:500pt ;width:50%;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use>
                                <img src="images/coffee-cup.png" style="width:35% ;height:25%;" alt="">
                            </use>
                        </svg>
                        <br>
                    </a>
                    <p class="text-muted"></p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5>Location</h5>
                    <p>
                    <address>
                        Thunder Cafe , <br>
                        Time Square ,<br>
                        Bhuj - Mirzapar Highway , <br>
                        Bhuj - Kutch.
                    </address>
                    </p>
                </div>

                <div class="col mb-3">
                    <h5>Follow Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram -
                                @thundercafe</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook - Thunder
                                Cafe</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Youtube - Thunder Cafe</a>
                        </li>
                    </ul>
                </div>


            </footer>
        </div>
    </section>
    <section>


        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="thundercafe.html" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About Us</a></li>
                    <li class="nav-item"><a href="review.php" class="nav-link px-2 text-muted">Review</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">Contact</a></li>
                    <li class="nav-item"><a href="" class="nav-link px-2 text-muted"></a></li>
                </ul>
            </footer>
        </div>
        <script>
            function confirm(){
                alert("Are You Sure");
            }
        </script>
</body>

</html>