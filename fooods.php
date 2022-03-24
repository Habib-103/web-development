<?php
ini_set( "display_errors", 0);
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>AFG Resturant</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-sixteen.css">
    <link rel="stylesheet" href="css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>AFG <em>Resturant</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link active" href="fooods.php">Food</a>
              </li>
              <li class="nav-item">
               <div>
                 <?php
                  $count = 0;
                  if(isset($_SESSION['card'])){
                      $count = count($_SESSION['card']);   
                  }
                  ?>
                  <a href="mycart.php" class="nav-link">Orders List (<?php echo $count; ?>)</a>
                  </div>   
              </li>
              <li class="nav-item">
                <a class="nav-link" href="location.html">Location &amp; Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">ADMIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>We provide you </h4>
              <h2>The Best Dishes</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Avalible Foods</li>
                  <li data-filter=".des">Most Favoriate</li>
                  <li data-filter=".dev">Great Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    
                    <div class="col-lg-4 col-md-4 all dev">
                    <div class="product-item">
                    <form action="manage_cart.php" method="post">
                     <div class="card">
                      <img src="images/food_01.jpg" class="card-img-top">
                       <div class="card-body">
                        <h5 class="card-title">Chopan Kabab</h5>
                        <p class="card-text">Chopan Kabab is often made with jijeq - pieces of fat from the sheep's tail which are added to lamb skewers for extra flavor, while the meat is sometimes pre-marinated.</p>
                        <p class="card-text">Price: 250 AFN</p>
                        <button name="Add_To_Cart" type="submit" class="btn btn-info">Order Now</button>
                        <input type="hidden" name="food_name" value="Chopan Kabab ">
                        <input type="hidden" name="food_detail" value="Chopan Kabab is often made with jijeq - pieces of fat from the sheep's tail which are added to lamb skewers for extra flavor, while the meat is sometimes pre-marinated.">
                        <input type="hidden" name="food_price" value="250">
                      </div>
                      </div>
                     </form> 
                    </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 all gra">
                    <div class="product-item">
                    <form action="manage_cart.php" method="post">
                     <div class="card">
                      <img src="images/food_02.jpg" class="card-img-top">
                       <div class="card-body">
                        <h5 class="card-title">Sabzi Palak</h5>
                        <p class="card-text">One serving of Sabzi Palak gives 103 calories. Out of which carbohydrates comprise 59 calories, proteins account for 12 calories and remaining calories come from fat.</p>
                        <p class="card-text">Price: 120 AFN</p>
                        <button name="Add_To_Cart" type="submit" class="btn btn-info">Order Now</button>
                        <input type="hidden" name="food_name" value="Sabzi Palak">
                        <input type="hidden" name="food_detail" value="One serving of Sabzi Palak gives 103 calories. Out of which carbohydrates comprise 59 calories, proteins account for 12 calories and remaining calories come from fat.">
                        <input type="hidden" name="food_price" value="120">
                      </div>
                      </div>
                     </form> 
                    </div> 
                    </div>
                    
                    <div class="col-lg-4 col-md-4 all gra">
                    <div class="product-item">
                    <form action="manage_cart.php" method="post">
                     <div class="card">
                      <img src="images/food_03.jpg" class="card-img-top">
                       <div class="card-body">
                        <h5 class="card-title">Spaghetti</h5>
                           <p class="card-text">Our Spaghetti is cooked by Afghan Tradition way of cooking. It's ingredians are chilli pepper, potatoes, none cocked oil tomatoes, onion, garlic. Fresh and hot ready for you!</p>
                        <p class="card-text">Price: 170 AFN</p>
                        <button name="Add_To_Cart" type="submit" class="btn btn-info">Order Now</button>
                        <input type="hidden" name="food_name" value="Spaghetti">
                        <input type="hidden" name="food_detail" value="Our Spaghetti is cooked by Afghan Tradition way of cooking. It's ingredians are chilli pepper, potatoes, tomatoes, onion, garlic. Fresh and hot ready for you!">
                        <input type="hidden" name="food_price" value="170">
                      </div>
                      </div>
                     </form> 
                    </div> 
                    </div>
                    
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                         <form action="manage_cart.php" method="post">
                         <div class="card">
                          <img src="images/food_04.jpg" class="card-img-top">
                           <div class="card-body">
                            <h5 class="card-title">Afghan Spaghetti Sauce</h5>
                            <p class="card-text">Afghan Spaghetti Sauce made primarily from tomatoes, usually to be served as part of a dish, rather than as a condiment. It has meat and vegetables.</p>
                            <p class="card-text">Price: 240 AFN</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Order Now</button>
                            <input type="hidden" name="food_name" value="Afghan Spaghetti Sauce">
                            <input type="hidden" name="food_detail" value="Our Spaghetti is cooked by Afghan Tradition way of cooking. It's ingredians are chilli pepper, potatoes, tomatoes, onion, garlic. Fresh and hot ready for you!">
                            <input type="hidden" name="food_price" value="240">
                          </div>
                          </div>
                         </form> 
                        </div>
                      </div>
                      
                      
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <form action="manage_cart.php" method="post">
                         <div class="card">
                          <img src="images/food_06.jpg" class="card-img-top">
                           <div class="card-body">
                            <h5 class="card-title">Qabili Palaw</h5>
                            <p class="card-text">Qabili Palaw is a variety of pilaf made in Afghanistan, Tajikistan and parts of Central Asian countries. It consists of rice mixed with raisins, carrots, and beef. </p>
                            <p class="card-text">Price: 360 AFN</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Order Now</button>
                            <input type="hidden" name="food_name" value="Qabili Palaw">
                            <input type="hidden" name="food_detail" value="Qabili Palaw is a variety of pilaf made in Afghanistan, Tajikistan and parts of Central Asian countries. <br> It consists of steamed rice mixed with raisins, carrots, and beef or lamb. There exist different variations depending on the region.">
                            <input type="hidden" name="food_price" value="360">
                          </div>
                          </div>
                         </form> 
                    </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <form action="manage_cart.php" method="post">
                         <div class="card">
                          <img src="images/food_05.jpg" class="card-img-top">
                           <div class="card-body">
                            <h5 class="card-title">Afghan Ashak</h5>
                            <p class="card-text">An Afghan dish made of pasta dumplings filled with chives, with a tomato sauce, topped with yogurt and dried mint. A dish for your holidays or at special gatherings. </p>
                            <p class="card-text">Price: 240 AFN</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Order Now</button>
                            <input type="hidden" name="food_name" value="Afghan Spaghetti Sauce">
                            <input type="hidden" name="food_detail" value="Our Spaghetti is cooked by Afghan Tradition way of cooking. It's ingredians are chilli pepper, potatoes, tomatoes, onion, garlic. Fresh and hot ready for you!">
                            <input type="hidden" name="food_price" value="240">
                          </div>
                          </div>
                         </form> 
                    </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 AFG Resturant</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
