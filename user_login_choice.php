<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-vy5LylW5oWK4v5Vxuq+Lx2CivHj7uh0f/uk6zL6InPRaA/mKK6+8xjfPkBfFUZwz" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;

            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            width: 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            /* Arrange contents vertically */
            justify-content: center;
            /* Center contents vertically */
        }

        .card h2 {
            margin-bottom: 20px;
        }

        .card button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        .card button:hover {
            background-color: #0056b3;
        }

        .icon {
            font-size: 50px;
            margin-bottom: 10px;
        }

        .image-container {
            width: 200px;
            height: 200px;
            overflow: hidden;
            /* Ensure that images don't overflow their container */
            margin: 10px auto;
            /* Center horizontally */
            border-radius: 50%;
            /* Make the container itself round */
        }

        img {
            width: 100%;
            /* Make the images fill their container */
            height: auto;
            /* Maintain aspect ratio */
            display: block;
            /* Remove any default inline spacing */
        }

        .losi{
            display: flex;
            flex-direction: column;
        }

        .head-card {
            text-align: center;
        }


    </style>
</head>

<body>
   
<header>
        <nav class="navbar navbar-expand-lg pl-4 pr-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Name</a>
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
    <div class="losi">
        <div class="head-card">
            <h1>Login as</h1>
        </div>

        <div class="container">
            <div class="card">
                <a href="ologin.php" style="text-decoration:none">
                    <h2>Owner</h2>
                    <div class="image-container">
                        <img src="Images/owner.png" alt="Owner">
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="clogin.php" style="text-decoration:none">
                    <h2>Client</h2>
                    <div class="image-container">
                        <img src="Images/client.png" alt="client">
                    </div>
                </a>
            </div>

            
        </div>
    </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
