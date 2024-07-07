<?php
include ("dbconnection.php");

// Fetch data from the database
$query = "SELECT * FROM adddomestic"; // Replace 'your_table' with your actual table name
$result = mysqli_query($conn, $query);

// Initialize an empty array to store fetched data
$data = [];

// Check if the query executed successfully
if ($result) {
    // Fetch associative array from the result
    while ($row = mysqli_fetch_assoc($result)) {
        // Push each row to the $data array
        $data[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domestic property data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
        }
        .card .carousel {
            overflow: hidden;
            width: 100%;
            height: 150px; /* Adjust height as needed */
            position: relative;
        }
        .card .carousel .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .card .carousel .slide {
            flex: 0 0 auto;
            width: 100%;
        }
        .card .carousel .slide img {
            width: 100%; /* Set image width to 100% of the parent container */
            height: 150px;
        }
    </style>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg pl-4 pr-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fa fa-home"></i>Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-plus" style="color: blue;"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="user_login_choice.php">Login</a></li>
                              <li><a class="dropdown-item" href="registration.php">SignUp</a></li>
                            </ul>
                          </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <div class="container">
        <?php foreach ($data as $row): ?> 
        <div class="card">
            <div class="carousel">
                <div class="slides">
                    <?php foreach (explode(',', $row['dPhoto']) as $image): ?>
                        <div class="slide">
                            <img src="<?php echo $image; ?>" alt="Image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['dsize']; ?></h5>
                <p class="card-text"><?php echo $row['daddress']; ?></p>
                <p class="card-text">Price: $<?php echo $row['drent']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <script>
        // Your JavaScript for carousel/slider functionality
         const slides = document.querySelectorAll('.slide');
        const slidesContainer = document.querySelector('.slides');
        let slideIndex = 0;

        function showSlides() {
            slideIndex++;
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            const slideWidth = slides[0].offsetWidth;
            slidesContainer.style.transform = `translateX(-${slideWidth * slideIndex}px)`;
        }

        setInterval(showSlides, 3000); // Change slide every 3 seconds
    </script>
</body>
</html>
