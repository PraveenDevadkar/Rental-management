<?php
include ("dbconnection.php");
session_start();


$query="SELECT * from signup WHERE User_id= $_SESSION[myuser]";
$result = mysqli_query($conn, $query);

foreach($result as $row)
{
    $iduser= $row['User_id'];
    $fname = $row['firstName'];
    $lname = $row['lastName'];
    $addf = $row['address'];
    $pin = $row['pincode'];
    $email = $row['Email'];
    $phone = $row['Phone'];
    $dob = $row['Dob'];

}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User panel</title>
    <link rel="stylesheet" href="CSS/style_userpanel.css">
    <link rel="stylesheet" href="CSS/responsive_userpanel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .carddata {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            width: 300px;
        }
        .carddata img {
            max-width: 100%;
            height: auto;
        }


    
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

    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">RentVault</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

      

        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn" alt="">
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" alt="dp">
            </div>
        </div>

    </header>

    <div class="main-container" >
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options" >
                    <div class="nav-option option1" onclick="showContent('dashboardContent')">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" alt="dashboard">
                        <h3>Dashboard</h3>
                    </div>
<!-- 
                    <div class="nav-option option5" onclick="showContent('profileContent')">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" alt="blog">
                        <h3>Profile</h3>
                    </div> -->

                    <div class="nav-option option2" onclick="showContent('propertyContent')">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" alt="articles">
                        <h3> Properties</h3>
                    </div>


                    <div class="nav-option option3" onclick="showContent('bookedPropertiesContent')">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" alt="report">
                        <h3>Booked properties</h3>
                    </div>

                    <div class="nav-option option4" onclick="showContent('addpropertyContent')">
                        <!-- <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img" alt="institution"> -->
                        <i class="fa fa-plus" style="font-size:30px;color:#33006F"></i>
                        <h3> Add Proprty</h3>
                    </div>

                    <!-- <div class="nav-option option6" onclick="showContent('settingsContent')">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img" alt="settings">
                        <h3>Enquiry</h3>
                    </div> -->

                    <div class="nav-option logout" onclick="logout()">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" alt="logout">
                        <h3>Logout</h3>
                    </div>

                </div>
            </nav>
        </div>

        <div id="dashboardContent" class="content-section p-4" style="display: none;">
            <!-- Dashboard Content -->
            <div class="box-container">

                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Property Views</h2>
                    </div>

                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                        alt="Views">
                </div>

                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Likes</h2>
                    </div>

                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="likes">
                </div>

                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Comments</h2>
                    </div>

                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments">
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Toal no of proprties</h2>
                    </div>

                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>
            <!-- Add your dashboard content here -->
        </div>

      




<div id="propertyContent" class="content-section p-4" style="display: none;" >

<div class="searchbar">
        <input type="text" placeholder="Search by address" id="searchInput" oninput="filterCards()">
        <div class="searchbtn">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                class="icn srchicn" alt="search-icon">
        </div>
        <script>
              function filterCards()
               {
              var input, filter, container, cards, card, address, i;
              input = document.getElementById("searchInput");
              filter = input.value.toUpperCase();
              container = document.getElementById("propertyContent");
              cards = container.getElementsByClassName("card");
               for (i = 0; i < cards.length; i++) 
               {
                       card = cards[i];
                       address = card.getAttribute("data-address").toUpperCase();
                       if (address.indexOf(filter) > -1) 
                       {
                          card.style.display = "";
                       }
                        else 
                       {
                          card.style.display = "none";
                       }
               }
         }
</script>
        
</div>

<br>
<div style="background-color:#4b49ac;border-radius:10px;" >
<h1 style="width:1200px;" >Domestic properties</h1>
</div>
      
<?php
          include ("dbconnection.php");
          
          if (!isset($_SESSION['myuser'])) {
            echo "User not logged in.";
            exit;
        }
        
        $user_id = intval($_SESSION['myuser']);
        
        $query = "SELECT * FROM adddomestic WHERE User_id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $data = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        $stmt->close();
     

         ?>
         
    <!-- <div class="container">
        
     </div> -->
     <div class="container mt-4">
    <?php foreach ($data as $row): ?>
        <div class="card" data-address="<?php echo htmlspecialchars($row['daddress']); ?>">
            <div class="carousel">
                <div class="slides">
                    <?php foreach (explode(',', $row['dPhoto']) as $image): ?>
                        <div class="slide">
                            <img src="<?php echo htmlspecialchars($image); ?>" alt="Image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($row['dsize']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($row['daddress']); ?></p>
                <p class="card-text">Price: $<?php echo htmlspecialchars($row['drent']); ?></p>
                <a href="updateproperty.php?id=<?php echo $row['did']; ?>" class="btn btn-primary">Update</a>
                <a href="deletedom.php?id=<?php echo $row['did']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
        

    <br>
    <div style="background-color:#4b49ac;border-radius:10px; ">
    <h1>Commercial properties</h1>
    </div>
      
       <?php
          include ("dbconnection.php");
        
         $query = "SELECT * FROM addcommercial where User_id=$_SESSION[myuser]"; // Replace 'your_table' with your actual table name
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
          <div class="container">
         <?php foreach ($data as $row): ?> 
         <div class="card" data-address="<?php echo htmlspecialchars($row['caddress']); ?>">
             <div class="carousel">
                 <div class="slides">
                     <?php foreach (explode(',', $row['cPhoto']) as $image): ?>
                         <div class="slide">
                             <img src="<?php echo $image; ?>" alt="Image">
                         </div>
                     <?php endforeach; ?>
                 </div>
             </div>
             <div class="card-body">
                 <h5 class="card-title"><?php echo $row['csize']; ?></h5>
                 <p class="card-text"><?php echo $row['caddress']; ?></p>
                 <p class="card-text">Price: $<?php echo $row['crent']; ?></p>
                 <a href="updatecomproperty.php?id=<?php echo $row['cid']; ?>" class="btn btn-primary">Update</a>
                <a href="deletecom.php?id=<?php echo $row['cid']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
             </div>
         </div>
         <?php endforeach; ?>
     </div>


   
        
</div>

 









        <div id="bookedPropertiesContent" class="content-section p-4" style="display: none;">
            <!-- Booked property details-->

            <?php

             include("dbconnection.php");

             // Escape the session variable to prevent SQL injection
             $userId = mysqli_real_escape_string($conn, $_SESSION['myuser']);

             // Updated SQL query
            
             $query="SELECT bookdom.userid,adddomestic.dPhoto,bookdom.did,CONCAT(signup.firstName,' ',signup.lastName) as fullname,bookdom.startdate,bookdom.enddate 
                     FROM bookdom,signup,adddomestic
                     WHERE bookdom.did=adddomestic.did AND bookdom.userid=signup.User_id";
             $result=mysqli_query($conn,$query);

             if ($result && mysqli_num_rows($result) > 0) {
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); // Fetch all rows
            } else {
                $rows = [];
            }



              
            $query1="SELECT bookcom.userid,addcommercial.cPhoto,bookcom.cid,CONCAT(signup.firstName,' ',signup.lastName) as fullcname,bookcom.startdate,bookcom.enddate 
            FROM bookcom,signup,addcommercial
            WHERE bookcom.cid=addcommercial.cid AND bookcom.userid=signup.User_id";
              $result1=mysqli_query($conn,$query1);

               if ($result1 && mysqli_num_rows($result1) > 0) {
                  $rows1 = mysqli_fetch_all($result1, MYSQLI_ASSOC); // Fetch all rows
               } 
               else {
                  $rows1 = [];
               }



             


?>


<div class="container mt-4">
    <h2>Booked domestic property details</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" style="width:1200px">
            <thead style="background-color:black; color:white">
                <tr>
                    <th class="text-center">Property photo</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Rent</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($rows)): ?>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td class="text-center">
                                <?php
                                $images = explode(',', $row['dPhoto']);
                                if (!empty($images)) {
                                    $firstImage = $images[0]; // Get the first image only
                                    echo '<img src="' . $firstImage . '" alt="Property Photo" style="max-width: 200px; max-height: 200px;">';
                                } else {
                                    echo 'No photo available';
                                }
                                ?>
                            </td>
                            <td class="text-center"><?php echo $row['fullname']; ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($row['startdate']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($row['enddate']); ?></td>
                            <td class="text-center"><button class="p-1 btn-success" style="border-radius: 4px;">Booked</button></td>
                            <td class="text-center"> <a href="deletbookededom.php?id=<?php echo $row['did']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Cancle booking</a></td>
                            <td class="text-center"><a href="rentbookedom.php?id=<?php echo $row['did'];?>&userid=<?php echo $row['userid'];?>" class="btn btn-primary">Rent</a></td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No booked properties found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-4">
    <h2>Booked commercial property details</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" style="width:1200px">
            <thead style="background-color:black; color:white">
                <tr>
                    <th class="text-center">Property photo</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Rent</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($rows1)): ?>
                    <?php foreach ($rows1 as $row): ?>
                        <tr>
                            <td class="text-center">
                                <?php
                                $images = explode(',', $row['cPhoto']);
                                if (!empty($images)) {
                                    $firstImage = $images[0]; // Get the first image only
                                    echo '<img src="' . $firstImage . '" alt="Property Photo" style="max-width: 200px; max-height: 200px;">';
                                } else {
                                    echo 'No photo available';
                                }
                                ?>
                            </td>
                            <td class="text-center"><?php echo $row['fullcname']; ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($row['startdate']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($row['enddate']); ?></td>
                            <td class="text-center"><button class="p-1 btn-success" style="border-radius: 4px;">Booked</button></td>
                            <td class="text-center"> <a href="deletbookedecom.php?id=<?php echo $row['cid']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Cancle booking</a></td>
                            <td class="text-center"> <a href="rentbookedcom.php?id=<?php echo $row['cid']; ?>&userid=<?php echo $row['userid'];?>" class="btn btn-primary" >Rent</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No booked properties found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>






</div>


        <div id="addpropertyContent" class="content-section p-4"
            style="display: none; background-color:#fafaff; width:100%">  <!--#dadada--->
            <!-- Add Property Content -->
            <h2>Add Property Content</h2>

            <div class="toggle-buttons">
                <button onclick="showSubContent('domeprop')" class="btn btn-primary subconbutton">Domestic
                    Property</button>
                <button onclick="showSubContent('commprop')" class="btn btn-primary subconbutton ">Commercial
                    Property</button>
            </div>




            <div id="domeprop" class="sub-content " style="display: none;">

                <form class="p-4" method="post" enctype="multipart/form-data">
                    <h2 class="mb-4">Add new domestic property </h2>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label  class="form-label">Property Photos</label>
                            <input type="file" class="form-control"  name="dpropertyPhotos[]" multiple>
                        </div>

                        <div class="col-md-6">
                            <label  class="form-label">Address</label>
                            <input type="text" class="form-control" name="daddress" placeholder="Enter address">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label  class="form-label">Rent</label>
                            <input type="number" class="form-control" name="drent" placeholder="Enter rent">
                        </div>

                        <div class="col-md-6">
                            <label  class="form-label">Size</label>
                            <input type="text" class="form-control" name="dsize" placeholder="Enter size">
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="dsub">Upload</button>
                    </div>
                </form>

            </div>







            <div id="commprop" class="sub-content" style="display: none;">

                <form class="p-4" method="post" enctype="multipart/form-data">
                    <h2 class="mb-4">Add new commercial property</h2>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label  class="form-label">Property Photos</label>
                            <input type="file" class="form-control" name="cpropertyPhotos[]" multiple>
                        </div>

                        <div class="col-md-6">
                            <label  class="form-label">Address</label>
                            <input type="text" class="form-control" name="caddress" placeholder="Enter address">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label  class="form-label">Rent</label>
                            <input type="number" class="form-control" name="crent" placeholder="Enter rent">
                        </div>

                        <div class="col-md-6">
                            <label  class="form-label">Size</label>
                            <input type="text" class="form-control" name="csize" placeholder="Enter size">
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="csub">Upload</button>
                    </div>
                </form>
            </div>


          
        </div>








        <div id="settingsContent" class="content-section p-4" style="display: none;">
            <!-- Settings Content -->
            <h2>Settings Content</h2>
            <!-- Add your settings content here -->
        </div>

    </div>

<script>
    // JavaScript for collapsing/expanding the navigation
        let menuicn = document.querySelector(".menuicn");
        let nav = document.querySelector(".navcontainer");

        menuicn.addEventListener("click", () => {
            nav.classList.toggle("navclose");
        });

        // JavaScript for showing/hiding content sections
        function showContent(contentId) {
            var contents = document.getElementsByClassName("content-section");
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = "none"; // Hide all content sections
            }
            document.getElementById(contentId).style.display = "block"; // Show the selected content
        }

        function logout() {
           
           if (confirm("Are you sure you want to logout?")) {
               // If user clicks "OK", redirect to logout.php
               window.location.href = 'index.php';
           } else {
               // 
           }
       }

        // Show the dashboard content by default when the page loads
        window.addEventListener("load", function () {
            showContent("dashboardContent");
        });

         function showSubContent(subContentId) {
            var subContents = document.getElementsByClassName("sub-content");
            for (var i = 0; i < subContents.length; i++) {
                subContents[i].style.display = "none"; // Hide all sub-content sections
            }
            document.getElementById(subContentId).style.display = "block"; // Show the selected sub-content
        }









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


    document.getElementById('searchInput').addEventListener('input', function() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var cards = document.querySelectorAll('.card');

    cards.forEach(function(card) {
        var address = card.getAttribute('data-address').toLowerCase();
        if (address.includes(input)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
});




  </script>

</body>

</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {   

        if (isset($_POST['dsub'])) 
        {  
              // Escape special characters and prepare the data for insertion
              $daddress = mysqli_real_escape_string($conn, $_POST['daddress']);
              $drent = mysqli_real_escape_string($conn, $_POST['drent']);
              $dsize = mysqli_real_escape_string($conn, $_POST['dsize']);

                // File upload handling
                $targetDirectoryy = "domestic/"; // Directory where uploaded files will be saved
                $filePathsd = []; // Array to store file paths

                 // Loop through each uploaded file
                foreach ($_FILES['dpropertyPhotos']['tmp_name'] as $key => $tmpName)
                 {
                    $fileName = basename($_FILES['dpropertyPhotos']['name'][$key]);
                    $targetFile = $targetDirectoryy . $fileName;

                    // Move the uploaded file to the specified directory
                    if (move_uploaded_file($tmpName, $targetFile)) 
                    {
                        $filePathsd[] = $targetFile; // Store file path
                    } 
                    else 
                    {
                     echo "Error uploading file.";
                    }
                }

                 // Insert form data and file paths into the database
                 $filePathsStr = implode(',', $filePathsd); // Convert file paths array to comma-separated string
                 $sql = "INSERT INTO adddomestic(User_id,dPhoto,drent,daddress, dsize ) VALUES (?,?, ?, ?, ?)";
                 $stmt = $conn->prepare($sql);
                 $stmt->bind_param("issss", $iduser,$filePathsStr,$drent,$daddress, $dsize );

                // Execute the statement
                if ($stmt->execute()) 
                 {
                      echo "<script>alert('New record created successfully');</script>";
                 } 
                 else
                {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                }
      



            
           
     
        
        
        }






        elseif (isset($_POST['csub'])) 
        {   
            
            // Escape special characters and prepare the data for insertion
            $caddress = mysqli_real_escape_string($conn, $_POST['caddress']);
            $crent = mysqli_real_escape_string($conn, $_POST['crent']);
            $csize = mysqli_real_escape_string($conn, $_POST['csize']);

              // File upload handling
              $targetDirectoryy = "commercial/"; // Directory where uploaded files will be saved
              $filePathsd = []; // Array to store file paths

               // Loop through each uploaded file
              foreach ($_FILES['cpropertyPhotos']['tmp_name'] as $key => $tmpName)
               {
                  $fileName = basename($_FILES['cpropertyPhotos']['name'][$key]);
                  $targetFile = $targetDirectoryy . $fileName;

                  // Move the uploaded file to the specified directory
                  if (move_uploaded_file($tmpName, $targetFile)) 
                  {
                      $filePathsd[] = $targetFile; // Store file path
                  } 
                  else 
                  {
                   echo "Error uploading file.";
                  }
              }

               // Insert form data and file paths into the database
               $filePathsStr = implode(',', $filePathsd); // Convert file paths array to comma-separated string
               $sql = "INSERT INTO addcommercial(User_id,cPhoto,crent,caddress, csize ) VALUES (?,?, ?, ?, ?)";
               $stmt = $conn->prepare($sql);
               $stmt->bind_param("issss", $iduser,$filePathsStr,$crent,$caddress, $csize );

              // Execute the statement
              if ($stmt->execute()) 
               {
                    echo "<script>alert('New record created successfully');</script>";
               } 
               else
              {
                   echo "Error: " . $sql . "<br>" . $conn->error;
              }
    



           
        } 
        
        
        
        
      
       
       
     }

    

?>
