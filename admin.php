<?php
$db = mysqli_connect("localhost", "root", "", "afg_rest");
$result = mysqli_query($db,"SELECT * FROM users");
?>
<!DOCTYPE html>
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
                <a class="nav-link" href="fooods.">Food</a>
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
                <a class="nav-link active" href="signup.php">Web Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">LOGOUT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
 <div style="padding:10%;" class="container">
     <h2>AFG Resturant Users Database Records</h2>
     <table class="table">
        <thead>
         <tr>
             <th>USER_ID</th>
             <th>FULL NAME</th>
             <th>EMAIL</th>
             <th>PASSWORD</th>
             <th>ADDRESS</th>
             <th>CITY</th>
             <th>PHONE#</th>    
         </tr>
         </thead>
         <tbody>
            <?php
             if($result->num_rows>0){
                 while($row = $result->fetch_assoc()){
                     
                     ?>
                     <tr>
                        <td><?php echo $row['U_ID'] ?></td>
                        <td><?php echo $row['U_FULLNAME'] ?></td>
                        <td><?php echo $row['U_EMAIL'] ?></td>
                        <td><?php echo $row['U_PASSWORD'] ?></td>
                        <td><?php echo $row['U_ADDRESS'] ?></td>
                        <td><?php echo $row['U_CITY'] ?></td>
                        <td><?php echo $row['U_PHONE'] ?></td>
                        <td>
                        <a class="btn btn-info" href="update.php?edit=<?php echo $row['U_ID']; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="delete.php?delete=<?php echo $row['U_ID']; ?>">Delete</a>
                        </td>
                     </tr>
                     <?php
                 }
             }
             ?> 
         </tbody>   
     </table>     
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


