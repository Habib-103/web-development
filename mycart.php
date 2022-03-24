<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>AFG Resturant Order Cart</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-sixteen.css">
    <link rel="stylesheet" href="css/owl.css">
  </head>
<body>

  <div class="container">
     <br>
      <div style="padding-top:10%;" class="row">
          <div class="col-lg-8">
              <h1 >LIST OF YOUR ORDERS</h1>
          </div>
          <div class="col-lg-9">
             <table class="table">
              <thead class="text-center">
                <tr>
                  <th scope="col">Serial No. </th>
                  <th scope="col">Food Name</th>
                  <th scope="col">Food Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="text-center">
              <?php
                $total =0;
                if(isset($_SESSION['card'])){
                    foreach($_SESSION['card'] as $key => $value)
                    {
                        $serialNum =$key+1; 
                        $total =$total+$value['food_price'];
                        echo"
                        <tr>
                        <td>$serialNum</td>
                        <td>$value[food_name]</td>
                        <td>$value[food_price] AFN</td>
                        <td><input class='text' type = 'number' value= '$value[Quantity]' min='1' max='10'></td>
                        <td>
                        <form action ='manage_cart.php' method = 'post'>
                        <button name ='food_remove' class='btn btn-sm btn-outline-danger'> Remove</button>
                        <input type='hidden' name = 'food_name' value='$value[food_name]'>
                        </form>
                        </td>
                        ";
                    }
                }
                  ?>  
              </tbody>
            </table>
          </div>
          <div style="width:500px;" class="border bg-light rounded p-4">
          <div class="col-lg-8">
              <h3>Total: </h3>
              <h5 class="text-right"><?php echo $total.' AFN' ?> </h5>
              <form action="signup.php">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Pay Cash On Delivery
                  </label>
                </div>
                 <br>
                  <button class="btn btn-primary btn-block"> Make Purchase</button>
              </form>
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