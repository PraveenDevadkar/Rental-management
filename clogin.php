<?php

include ("dbconnection.php");
session_start();


// Process login form submission
if (isset($_POST['cloginbtn'])) {
  // Retrieve form data
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Query the database for the user
  $sql = "SELECT * FROM  signup WHERE Email = '$email' AND password = '$password' AND  Role = 'tenant'";
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) == 1) 
  {
     $fetch_id= "SELECT User_id from signup WHERE Email= '$email AND  password = '$password' AND  Role = 'tenant' ";
     $row = mysqli_fetch_array($result);
     $_SESSION['myuser']=$row['User_id'];
     header("Location:client_panel.php");
  } 
  else {
    $error = "Invalid email or password";
   }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Webpage</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <style>
      .divider:after,
      .divider:before {
          content: "";
          flex: 1;
          height: 1px;
          background: #eee;
      }

      .h-custom {
          height: calc(100% - 73px);
       }

       .csignin{
         font-size:36px;
         color:#FF8C00;
         font-weight:bold;
       }



     @media (max-width: 450px) {
     .h-custom {
          height: 200%;

          }
     }
    </style>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="Images/cloginimgr.png"
          class="img-fluid w-100" alt="Sample image" >
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post" >

          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="csignin mb-0 me-2">Sign in</p>
          </div>

          <div class="divider d-flex align-items-center my-4">
               <p class="text-center fw-bold mx-6 mb-0"></p>
          </div>

        
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" name="email"/>
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="cloginbtn">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
        <?php if (isset($error)) { echo $error; } ?>

      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    

  
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    
  </div>
</section>

</body>
</html>



