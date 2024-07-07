<?php
include_once "dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="CSS/index.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg pl-4 pr-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-family:Fantasy;font-size:30px">Name</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="user_login_choice.php" style="font-size:20px;">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registration.php" style="font-size:20px;">Register</a>
                        </li>
                       
                       
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <h1 style="text-align:center">Find Your <span style="color: blue; ">Dream</span> Property</h1>
    <p style="text-align:center; font-size:18px; font-family:cursive;text-indent: 30px;" class="p-4">Welcome to our rental management website, where convenience meets efficiency. Whether you're a property owner looking to streamline your rental process or a tenant seeking the perfect home, our platform is tailored to meet your needs. With user-friendly interfaces and comprehensive tools, managing properties and finding rentals has never been easier.<b> Join our community today and experience the future of rental management</b></p>
        
    

    <div class="image" style="text-align: center; display:flex;">
            <img src="Images/rentdom.jpg" alt="Home_image" style="display:block; margin: auto;">
            <img src="Images/rentcom.png" alt="Home_image" style="display:block; margin: auto;">
            <img src="Images/rentveh.png" alt="Home_image" style="display:block; margin: auto;">

    </div>

    

  
 



         
    <footer style="background-color: #585858;" class="text-center "  >
    <div class="row pt-4" >
        <div class="col-md-4">
            <span style="font-size:20px; color:white"><i class="fa fa-map-marker" style="font-size:30px"></i> 123 Main Street, Cityville, State, ZIP</span>
        </div>
        <div class="col-md-4">
            <span style="font-size:20px;color:white"><i class="fa fa-phone" style="font-size:30px"></i>+1 (555) 123-4567 </span>
        </div>
        <div class="col-md-4">
            <span style="font-size:20px;color:white"><i class="fa fa-envelope" style="font-size:30px"></i> info@example.com</span>
        </div>
    </div>
    <hr>
    <div class="text-center p-3" style="background-color:#585858">
         <p style="color:white; font-size:18px">© 2020 Copyright:FlowerCreeper legal and HR solutions.com</p>
     </div>

    </div>
</footer>










      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>