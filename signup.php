<?php
ini_set( "display_errors", 0);
include("header.php");
session_start();

$db = mysqli_connect("localhost", "root", "", "afg_rest");

if(isset($_POST['signup'])){
    $signup_fullname = $_POST['signup_fullname'];
    $signup_email = $_POST['signup_email'];
    $signup_password = $_POST['signup_password'];
    $signup_address = $_POST['signup_address'];
    $signup_city = $_POST['signup_city'];
    $signup_phone= $_POST['signup_phone'];
    
    
    $sql = "INSERT INTO users(U_FULLNAME, U_EMAIL, U_PASSWORD, U_ADDRESS, U_CITY, U_PHONE) VALUES ('$signup_fullname', '$signup_email', '$signup_password', '$signup_address', '$signup_city', '$signup_phone')";
    $result = mysqli_query($db, $sql);
    if($result == TRUE){
        echo
            "<script>
            alert('Account Created Successfully!');
            window.location.href='signup.php';
            </script>";
    }
    else{
        echo
            "<script>
            alert('Already Registred!');
            window.location.href='signup.php';
            </script>";
    }
    //$db->close();
}
if(isset($_POST['signin'])){
    $signin_email = $_POST['signin_email'];
    $signin_password = $_POST['signin_password'];
   // $signin_as = $_POST['signin_as'];
    
    $signinsql = "SELECT * FROM users WHERE U_EMAIL= '$signin_email' and U_POSITION='$signin_as' and U_PASSWORD='$signin_password'";
    $signinresult = mysqli_query($db,signinsql);
    $signinrow = mysqli_fetch_array($signinresult);

    if($signinrow['U_EMAIL']=$signin_email and $signinrow['U_PASSWORD']=$signin_password and $_POST['signin_as']=="Buyer"){
        echo
            "<script>
            alert('DEAR USER, You Successfully Purchased the food, Check your Email for bill and details!');
            window.location.href='mycart.php';
            </script>";   
        }
    if($_POST['signin_as']=="Admin" and $_POST['signin_email']=="admin@admin.af" and $_POST['signin_password']=="admin"){
        echo
            "<script>
            alert('DEAR ADMIN, WELCOME!');
            window.location.href='admin.php';
            </script>";   
        }
    else{
        echo
            "<script>
            alert('Incorrect Password or Username!');
            window.location.href='signup.php';
            </script>";
    }
}
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

    
<div style="padding:10%;" class="col-md-12">
<div class="filters-content">    
<table style="width: 200px;">
    <tr>   
    <td>
        <div class="border bg-light rounded p-4">
            <div><label><h1>SIGN IN</h1></label></div>
            <br>
        <form method="post" action="">
          <div class="col-md-12">
            <label class="signin_email_lable">Email</label>
            <input type="email" class="signin_email" name="signin_email">
          </div>
          <div class="col-md-8">
            <label class="signin_password_lable">Password</label>
            <input type="password" class="signin_password_lable" name="signin_password">
          </div>
          <div class="col-md-8">
           <br>
            <label class="signin_as_lable">Login As</label>
            <select name="signin_as" class="signin_as">
              <option selected>Choose...</option>
              <option value="Admin">Admin</option>
              <option value="Buyer">Food Buyer</option>
            </select>
          </div>
          <div class="col-12">
           <br>
            <button name="signin" type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </form>
        </div>   
    </td>
    <td>
       <div class="border bg-light rounded p-3">
       <div><label><h1>SIGN UP</h1></label></div>
            <br>
        <form action="" method="post">
         <div class="col-md-12">
            <label class="signup_fullname_lable">Full Name</label>
            <input type="text" class="signup_fullname" name="signup_fullname" id="signup_fullname">
          </div>
          <div class="col-md-12">
            <label class="signup_email_lable">Email</label>
            <input type="email" class="signup_email" name="signup_email">
          </div>
          <div class="col-md-12">
            <label class="signup_password_lable">Password</label>
            <input type="password" class="signup_password" name="signup_password">
          </div>
           <div class="col-md-12">
            <label class="signup_repassword_lable">Password</label>
            <input type="password" class="signup_repassword" name="signup_repassword">
          </div>
          <div class="col-12">
            <label class="signup_address_lable">Address</label>
            <input type="text" class="signup_address" name="signup_address" placeholder="1234 Main St">
          </div>
          <br>
          <div class="col-md-12">
            <label class="signup_phone_label">Phone</label>
            <input type="text" class="signup_phone" name="signup_phone" id="signup_phone">
          </div>
          <div class="col-md-12">
           <br>
            <label class="signup_city_lable">City</label>
            <select name="signup_city" class="signup_city">
              <option selected>Choose...</option>
              <option value="Kabul">Kabul</option>
              <option value="Herat">Herat</option>
              <option value="Kandahar">Kandahar</option>
              <option value="Mazar">Mazar</option>
            </select>
          </div>
          <br>
          <div class="col-12">
            <button onclick="regexFormValidation()" name="signup" type="submit" class="btn btn-primary" >Sign Up</button>
          </div> 
        </form>
        </div>
        </td>
    <td>
      <img style="width:500px;" src="images/order1.jpg"/>
    </td>
    </tr>   
</table> 
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
    <!-- form check regex -->
    <script>
        function regexFormValidation(){
        signup_fullname = document.getElementById("signup_fullname");
        signup_phone = document.getElementById("signup_phone");
        
        expName = /^\s*([A-Za-z]{1,}([\.,] |[-']| ))+[A-Za-z]+\.?\s*$/
            if(signup_fullname.value.match(expName)){
                    signup_fullname.innerHTML = "Ok!";
                }
                else{
                    alert('Invalid Name!')
                    window.location.href='signup.php';
                }

              expPhone = /^[0-9]{10}$/
                if(signup_phone.value.match(expPhone)){
                    signup_phone.innerHTML = "Phone";
                    signup_phone.style.color= "Green";
                }
            else{
                alert('Invalid Phone!')
                window.location.href='signup.php';    
            }   
        }
      </script>
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
