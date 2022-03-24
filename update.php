<?php
ini_set( "display_errors", 0); 
$db = mysqli_connect("localhost", "root", "", "afg_rest") or die(mysqli_error($db));

$signup_fullname='';
$signup_email='';
$signup_password='';
$signup_address='';
$signup_city ='';
$signup_phone= '';

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $db->query("SELECT * FROM users WHERE U_ID = $id") or die($db->error);
    
    if(count($result)==1){
        $row = $result->fetch_array();
        
        $signup_fullname = $row['U_FULLNAME'];
        $signup_email = $row['U_EMAIL'];
        $signup_password = $row['U_PASSWORD'];
        $signup_address = $row['U_ADDRESS'];
        $signup_city = $row['U_CITY'];
        $signup_phone = $row['U_PHONE']; 
}
}

if(isset($_POST['update'])){
        $id  = $_POST['signup_id'];
        $name = $_POST['signup_fullname'];
        $email = $_POST['signup_email'];
        $password = $_POST['signup_password'];
        $address = $_POST['signup_address'];
        $city = $_POST['signup_city'];
        $phone = $_POST['signup_phone'];
    
    $sqlUpdate = "UPDATE users SET U_FULLNAME='$name', U_EMAIL='$email', U_PASSWORD='$password', U_ADDRESS='$address', U_CITY='$city', U_PHONE='$phone' WHERE (U_ID = '$id')";
    $resultUpdate = $db->query($sqlUpdate);
    
    if($resultUpdate==TRUE){
        echo
        "<script>
        alert('Record Updated!');
        window.location.href='admin.php';
        </script>";
    }
    else{
        echo
        "<script>
        alert('Update Error!');
        window.location.href='update.php';
        </script>";
    }
}

    ?> 
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>AFG Resturant @ADMIN</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-sixteen.css">
    <link rel="stylesheet" href="css/owl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
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
                <a class="nav-link" href="signup.php">LOGOUT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
       
 <div style="padding:10%" class="container">
       <div><label><h1>UPDATING THE RECORD ...</h1></label></div>
            <br>
        <form class="border bg-light rounded p-4" action="" method="post">
         <div class="col-md-12">
            <label class="signup_fullname_lable">Full Name</label>
            <input type="text" class="signup_fullname" name="signup_fullname" value="<?php echo $signup_fullname; ?>">
            <input type="hidden" class="signup_id" name="signup_id" value="<?php echo $id; ?>">
          </div>
          <div class="col-md-12">
            <label class="signup_email_lable">Email</label>
            <input type="email" class="signup_email" name="signup_email" value="<?php echo $signup_email; ?>">
          </div>
          <div class="col-md-12">
            <label class="signup_password_lable">Password</label>
            <input type="password" class="signup_password" name="signup_password" value="<?php echo $signup_password; ?>">
          </div>
          <div class="col-12">
            <label class="signup_address_lable">Address</label>
            <input type="text" class="signup_address" name="signup_address" value="<?php echo $signup_address; ?>">
          </div>
          <br>
          <div class="col-md-12">
            <label class="signup_phone_label">Phone</label>
            <input type="text" class="signup_phone" name="signup_phone" value="<?php echo $signup_phone; ?>">
          </div>
          <div class="col-md-12">
           <br>
            <label class="signup_city_lable">City</label>
            <select name="signup_city" class="signup_city">
              <option value="Kabul" <?php if($signup_city = 'Kabul') echo 'selected="selected"'; ?>>Kabul</option>
              <option value="Herat" <?php if($signup_city = 'Herat') echo 'selected="selected"'; ?>>Herat</option>
              <option value="Kandahar" <?php if($signup_city ='Kandahar') echo 'selected="selected"'; ?>>Kandahar</option>
              <option value="Mazar" <?php if ($signup_city = 'Mazar') echo 'selected="selected"'; ?>>Mazar</option>
            </select>
          </div>
          <br>
          <div class="col-12">
            <button name="update" type="submit" class="btn btn-primary">Save Changes</button>
          </div>
          
        </form>
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