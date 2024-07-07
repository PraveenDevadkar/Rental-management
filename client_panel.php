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


                    <div class="nav-option option2" onclick="showContent('propertyContent')">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" alt="articles">
                        <h3>Search Properties</h3>
                    </div>


                    <div class="nav-option option3" onclick="showContent('bookedPropertiesContent')">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" alt="report">
                        <h3>Booked properties</h3>

                    </div>

                    <div class="nav-option option5" onclick="showContent('profileContent')">
                
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" alt="blog">
                        <h3>Payment</h3>
                    
                    </div>

                    <div class="nav-option option5" onclick="showContent('complaintContent')">
                
                           <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" alt="blog">
                           <h3>Complaint</h3>
            
                     </div>

                  

                   

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

        

        <div id="complaintContent" class="content-section  p-4  " style="display: none;" >
           <h1>Complaint form</h1>
           <div class="container" style="width:1200px;">
  <div class="row mx-0 justify-content-center">
    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
      <form method="POST" class="w-100 rounded-1 p-4 border bg-white" action="mailform.php" enctype="multipart/form-data">
        <label class="d-block mb-4">
          <span class="form-label d-block">Your name</span>
          <input
            name="name"
            type="text"
            class="form-control"
            placeholder="Enter your name"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Email address</span>
          <input
            name="email"
            type="email"
            class="form-control"
            placeholder="Enter your mail-id"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Images</span>
          <input name="receipt" type="file" class="form-control" />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">What's wrong?</span>
          <textarea
            name="message"
            class="form-control"
            rows="3"
            placeholder="Please describe your problem"
          ></textarea>
        </label>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary px-3 rounded-3" >
            Submit
          </button>
        </div>

      
      </form>
    </div>
  </div>
</div>

        </div>
     
     
            


       <div id="propertyContent" class="content-section p-4" style="display: none;">

         <div class="searchbar">
            <input type="text" placeholder="Search by address" id="searchInput" oninput="filterCards()">
            <div class="searchbtn">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" alt="search-icon">
            </div>
         



         </div>
    
          <br>
          <div style="background-color:red;border-radius:10px;">
          <h1>Domestic properties</h1>
         </div>
          
              <?php
              include ("dbconnection.php");
              
             
            
            
            // $query = "SELECT * FROM adddomestic ";
            $query = "SELECT adddomestic.* FROM adddomestic LEFT JOIN bookdom ON adddomestic.did=bookdom.did WHERE bookdom.did IS NULL";
            $stmt = $conn->prepare($query);
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
             
       
        <div class="container mt-4">
        <?php foreach ($data as $row): ?>
            <div class="card">
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
                    <a href="bookdomproperty.php?id=<?php echo $row['did']; ?>" class="btn btn-primary">Book</a>
                 
                </div>
            </div>
        <?php endforeach; ?>
       </div> 

            

        <br>
        <div style="background-color:red;border-radius:10px; ">
        <h1>Commercial properties</h1>
        </div>
          
           <?php
              include ("dbconnection.php");
            
            $query = "SELECT addcommercial.* FROM addcommercial LEFT JOIN bookcom ON addcommercial.cid=bookcom.cid WHERE bookcom.cid IS NULL";
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
             <div class="card">
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
                     <a href="bookcomproperty.php?id=<?php echo $row['cid']; ?>" class="btn btn-primary">Book</a>
                   
                 </div>
             </div>
             <?php endforeach; ?>
         </div>


        
        
         
          
             
          
            
    </div>

    <script>
function filterCards() {
    var input, filter, cards, cardContainer, address, i;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("propertyContent"); // Assuming this is the container for all cards

    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        address = cards[i].getElementsByClassName("card-text")[0]; // Assuming the address is inside an element with class "card-text"
        if (address) {
            if (address.textContent.toUpperCase().indexOf(filter) > -1) {
                cards[i].style.display = ""; // Show the card if the address matches the filter
            } else {
                cards[i].style.display = "none"; // Hide the card if the address does not match the filter
            }
        }
    }
}
</script>




    <div id="bookedPropertiesContent" class="content-section p-4" style="display: none;">
    <!-- Booked property details-->
    <?php

    include("dbconnection.php");

    // Escape the session variable to prevent SQL injection
    $userId = mysqli_real_escape_string($conn, $_SESSION['myuser']);

    // Updated SQL query
    $query = "SELECT d.did, d.drent, d.dsize ,d.dPhoto
              FROM adddomestic d 
              INNER JOIN bookdom b ON d.did = b.did 
              WHERE b.userid = '$userId'";
    $result = mysqli_query($conn, $query);

    // Check for query success
    if ($result && mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); // Fetch all rows
    } else {
        $rows = [];
    }



     

     // Updated SQL query
     $query1 = "SELECT c.cid, c.crent, c.csize, c.cPhoto
     FROM addcommercial c 
     INNER JOIN bookcom b ON c.cid = b.cid 
     WHERE b.userid = '$userId'";
     $result1 = mysqli_query($conn, $query1);

      // Check for query success
      if ($result1 && mysqli_num_rows($result1) > 0) {
        $rows1 = mysqli_fetch_all($result1, MYSQLI_ASSOC); // Fetch all rows
      } else {
       $rows1 = [];
       }


    
    
     // Updated SQL query
     $query2 = "SELECT v.vid, v.vrent, v.vtype,v.vPhoto
     FROM addvehicle v 
     INNER JOIN bookveh b ON v.vid = b.vid 
     WHERE b.userid = '$userId'";
     $result2 = mysqli_query($conn, $query2);

      // Check for query success
      if ($result2 && mysqli_num_rows($result2) > 0) {
        $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC); // Fetch all rows
      } else {
       $rows2 = [];
       }


    ?>

    <div class="container mt-4">
        <h2>Booked domestic property details</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:1000px" >
                <thead style="Background-color:balck">
                    <tr >
                        <th class="text-center">Property ID</th>
                        <th class="text-center">Property Photo</th>
                        <th class="text-center">Rent</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Payment</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($rows)): ?>
                        <?php foreach ($rows as $row): ?>
                            <tr>
                                <td class="text-center"><?php echo htmlspecialchars($row['did']); ?></td>
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
                                <td class="text-center"><?php echo htmlspecialchars($row['drent']); ?></td>
                                <td class="text-center"><button class="p-1 btn-danger" style="border-radius:4px">Booked</button></td>
                                <td class="text-center"><a href="pay.php?id=<?php echo $row['did']; ?>" class="btn btn-primary" >Pay</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No booked properties found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="container mt-4">
        <h2>Booked commercial property details</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:1000px" >
                <thead style="Background-color:balck">
                    <tr >
                        <th class="text-center">Property ID</th>
                        <th class="text-center">Property Photo</th>
                        <th class="text-center">Rent</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Payment</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($rows1)): ?>
                        <?php foreach ($rows1 as $row): ?>
                            <tr>
                                <td class="text-center"><?php echo htmlspecialchars($row['cid']); ?></td>
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
                                <td class="text-center"><?php echo htmlspecialchars($row['crent']); ?></td>
                                <td class="text-center"><button class="p-1 btn-danger" style="border-radius:4px">Booked</button></td>
                                <td class="text-center"><a href="pay.php?id=<?php echo $row['cid']; ?>" class="btn btn-primary" >Pay</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No booked properties found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

   
</div>



    <div id="profileContent" class="content-section  p-4  " style="display: none;" >
    <div class="container mt-2 text-center">
        <h1>Upload Payment Details</h1>
        <div class="btn-group mt-3" role="group">
            <button type="button" class="btn btn-primary" onclick="showForm('depositForm')">Upload Deposit Payment Details</button>
            <button type="button" class="btn btn-primary" onclick="showForm('rentForm')">Upload Rent Payment Details</button>
            <button type="button" class="btn btn-primary" onclick="showForm('waterBillForm')">Upload Water Bill Details</button>
            <button type="button" class="btn btn-primary" onclick="showForm('currentBillForm')">Upload Current Bill Details</button>
            <button type="button" class="btn btn-primary" onclick="showForm('maintenanceBillForm')">Upload Maintenance Bill Details</button>
        </div>
    </div>

    





    <div id="depositForm" class="subformcontent-section container mt-5" style="display: none;">
<h1 class="text-center">Upload Deposit Payment Details</h1>
<form class="border rounded" method="post" enctype="multipart/form-data">
    <div class="row align-items-center p-2">
        <div class="col-md-6">
            <div class="mb-3 mt-2">
                <input type="text" class="form-control" id="userId" name="userId" value="<?php echo htmlspecialchars($_SESSION['myuser']); ?>" readonly required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 mt-2">
                <input type="text" class="form-control" id="propertyId" name="propertyId" placeholder="Enter Property ID" required>
            </div>
        </div>
    </div>
    <div class="row align-items-center p-2">
        <div class="col-md-6">
            <div class="mb-3 mt-2">
                <input type="file" class="form-control" id="depositfileInput" name="depositfile[]" multiple required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <select class="form-select" id="dropdownSelect" name="choosetype" required>
                    <option selected disabled>Choose type of property</option>
                    <option>Domestic</option>
                    <option>Commercial</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-2 mb-3">
        <div class="col-md-4 offset-md-4">
            <button type="submit" class="btn btn-primary w-100" name="deposit">Upload</button>
        </div>
    </div>
</form>

<?php
include ("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deposit'])) {   
    $userid = $_SESSION['myuser'];
    $pid = $_POST['propertyId'];
    $choosetype = $_POST['choosetype'];
    $ct = ($choosetype == "Domestic") ? "d" : "c";

    $targetDirectory = "records/depositrecord/";
    $filePathsd = [];
    $uploadOk = true;

    foreach ($_FILES['depositfile']['tmp_name'] as $key => $tmpName) {
        $fileName = basename($_FILES['depositfile']['name'][$key]);
        $targetFile = $targetDirectory . $fileName;

        if (!file_exists($targetDirectory)) {
            echo "<script>alert('Target directory does not exist.');</script>";
            $uploadOk = false;
            break;
        }

        if (!is_writable($targetDirectory)) {
            echo "<script>alert('Target directory is not writable.');</script>";
            $uploadOk = false;
            break;
        }

        if (move_uploaded_file($tmpName, $targetFile)) {
            $filePathsd[] = $targetFile;
        } else {
            echo "Error uploading file: " . $fileName;
            $uploadOk = false;
            break;
        }
    }

    if ($uploadOk) {
        $filePathsStr = implode(',', $filePathsd); 
        $sql = "INSERT INTO deposit (userid, ptype, pid, recordimg) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isis", $userid, $ct, $pid, $filePathsStr);

        if ($stmt->execute()) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
</div>


  






    <div id="rentForm" class="subformcontent-section container mt-5" style="display: none;">
        <h1 class="text-center">Upload Rent Payment Details</h1>
        <form class="border rounded" method="post" enctype="multipart/form-data">
    <div class="row align-items-center p-2">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="userId" name="userId" value="<?php echo $_SESSION['myuser'] ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="propertyId" name="propertyId" placeholder="Enter Property ID" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="startdate" name="startdate" placeholder="Enter Start Date :yyyy-mm-dd" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="enddate" name="enddate" placeholder="Enter End Date : yyyy-mm-dd" required>
                    </div>
                </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                   <div class="mb-3">
                          <input type="file" class="form-control" id="fileInput" name="rentfile[]" required>
                   </div>
                </div>

                <div class="col-md-6">
                   <div class="mb-3">
                   <select class="form-select" name="choosetype" id="dropdownSelect">
                        <option selected disabled>Choose type of property</option>
                        <option >Domestic</option>
                        <option >Commercial</option>
                     </select>
                   </div>
                </div>
            </div>
        
        </div>
       
        <div class="col-md-3 offset-md-4 ">
            <button type="submit" class="btn btn-primary w-100" name="rent">Upload</button>
        </div>
    </div>
</form>


<?php
include ("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rent'])) {   
    $userid1 = $_SESSION['myuser'];
    $pid1 = $_POST['propertyId'];
    $startdate1=$_POST['startdate'];
    $enddate1=$_POST['enddate'];
    $choosetype1 = $_POST['choosetype'];
    $ct1 = ($choosetype1 == "Domestic") ? "d" : "c";

    $targetDirectory = "records/rentrecord/";
    $filePathsd = [];
    $uploadOk = true;

    foreach ($_FILES['rentfile']['tmp_name'] as $key => $tmpName) {
        $fileName = basename($_FILES['rentfile']['name'][$key]);
        $targetFile = $targetDirectory . $fileName;

        if (!file_exists($targetDirectory)) {
            echo "<script>alert('Target directory does not exist.');</script>";
            $uploadOk = false;
            break;
        }

        if (!is_writable($targetDirectory)) {
            echo "<script>alert('Target directory is not writable.');</script>";
            $uploadOk = false;
            break;
        }

        if (move_uploaded_file($tmpName, $targetFile)) {
            $filePathsd[] = $targetFile;
        } else {
            echo "Error uploading file: " . $fileName;
            $uploadOk = false;
            break;
        }
    }

    if ($uploadOk) {
        $filePathsStr1 = implode(',', $filePathsd); 
        $sql = "INSERT INTO rent (userid, ptype, pid, recordimg,startdate,enddate) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isisss", $userid1, $ct1, $pid1,$filePathsStr1, $startdate1,$enddate1);

        if ($stmt->execute()) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

    </div>




    <div id="waterBillForm" class="subformcontent-section container mt-5">
    <h1 class="text-center">Upload Water Bill Details</h1>
    <form class="border rounded" method="post" enctype="multipart/form-data">
        <div class="row align-items-center p-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="userId" name="userId" value="<?php echo htmlspecialchars($_SESSION['myuser']); ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="propertyId" name="propertyId" placeholder="Enter Property ID" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="startdate" name="startdate" placeholder="Enter Start Date:yyyy-mm-dd" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="enddate" name="enddate" placeholder="Enter End Date:yyyy-mm-dd" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="file" class="form-control" id="fileInput" name="waterfile[]" multiple required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class="form-select" id="dropdownSelect" name="choosetype2" required>
                                <option selected disabled>Choose type of property</option>
                                <option value="Domestic">Domestic</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-4">
                <button type="submit" class="btn btn-primary w-100" name="water">Upload</button>
            </div>
        </div>
    </form>
    <?php
include ("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['water'])) {
    $userid2 = $_SESSION['myuser'];
    $pid2 = $_POST['propertyId'];
    $startdate2 = $_POST['startdate'];
    $enddate2 = $_POST['enddate'];
    
    if (!isset($_POST['choosetype2']) || empty($_POST['choosetype2'])) {
        echo "<script>alert('Please select the type of property.');</script>";
        exit();
    }

    $choosetype2 = $_POST['choosetype2'];
    $ct2 = ($choosetype2 == "Domestic") ? "d" : "c";

    $targetDirectory = "records/waterrecord/";
    $filePathsd = [];
    $uploadOk = true;

    // Check if the target directory exists and create it if not
    if (!file_exists($targetDirectory)) {
        if (!mkdir($targetDirectory, 0777, true)) {
            echo "<script>alert('Failed to create target directory.');</script>";
            $uploadOk = false;
        }
    }

    // Check if the directory is writable
    if (!is_writable($targetDirectory)) {
        echo "<script>alert('Target directory is not writable.');</script>";
        $uploadOk = false;
    }

    if ($uploadOk) {
        foreach ($_FILES['waterfile']['tmp_name'] as $key => $tmpName) {
            $fileName = basename($_FILES['waterfile']['name'][$key]);
            $targetFile = $targetDirectory . $fileName;

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($tmpName, $targetFile)) {
                $filePathsd[] = $targetFile;
            } else {
                echo "Error uploading file: " . $fileName;
                $uploadOk = false;
                break;
            }
        }

        if ($uploadOk) {
            $filePathsStr2 = implode(',', $filePathsd); 
            $sql = "INSERT INTO water (userid, ptype, pid, recordimg, startdate, enddate) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isisss", $userid2, $ct2, $pid2, $filePathsStr2, $startdate2, $enddate2);

            if ($stmt->execute()) {
                echo "<script>alert('New record created successfully');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
?>

</div>




    <div id="currentBillForm" class="subformcontent-section container mt-5" style="display: none;">
        <h1 class="text-center">Upload Current Bill Details</h1>
        <form class="border rounded" method="post" enctype="multipart/form-data">
    <div class="row align-items-center p-2">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="userId" name="userId"  value="<?php echo $_SESSION['myuser'] ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="propertyId" name="propertyId" placeholder="Enter Property ID" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="startdate" name="startdate" placeholder="Enter Start Date:yyyy-mm-dd" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="enddate" name="enddate" placeholder="Enter End Date:yyyy-mm-dd" required>
                    </div>
                </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                   <div class="mb-3">
                          <input type="file" class="form-control" id="fileInput" name="currentfile[]" multiple required>
                   </div>
                </div>

                <div class="col-md-6">
                   <div class="mb-3">
                   <select class="form-select" id="dropdownSelect" name="choosetype3">
                        <option selected disabled>Choose type of property</option>
                        <option >Domestic</option>
                        <option >Commercial</option>
                     </select>
                   </div>
                </div>
            </div>
        
        </div>
       
        <div class="col-md-3 offset-md-4 ">
            <button type="submit" class="btn btn-primary w-100" name="current">Upload</button>
        </div>
    </div>
</form>



<?php
include ("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['current'])) {
    $userid3 = $_SESSION['myuser'];
    $pid3 = $_POST['propertyId'];
    $startdate3 = $_POST['startdate'];
    $enddate3 = $_POST['enddate'];
    
    if (!isset($_POST['choosetype3']) || empty($_POST['choosetype3'])) {
        echo "<script>alert('Please select the type of property.');</script>";
        exit();
    }

    $choosetype3 = $_POST['choosetype3'];
    $ct3 = ($choosetype3 == "Domestic") ? "d" : "c";

    $targetDirectory = "records/currentrecords/";
    $filePathsd = [];
    $uploadOk = true;

    // Check if the target directory exists and create it if not
    if (!file_exists($targetDirectory)) {
        if (!mkdir($targetDirectory, 0777, true)) {
            echo "<script>alert('Failed to create target directory.');</script>";
            $uploadOk = false;
        }
    }

    // Check if the directory is writable
    if (!is_writable($targetDirectory)) {
        echo "<script>alert('Target directory is not writable.');</script>";
        $uploadOk = false;
    }

    if ($uploadOk) {
        foreach ($_FILES['currentfile']['tmp_name'] as $key => $tmpName) {
            $fileName = basename($_FILES['currentfile']['name'][$key]);
            $targetFile = $targetDirectory . $fileName;

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($tmpName, $targetFile)) {
                $filePathsd[] = $targetFile;
            } else {
                echo "Error uploading file: " . $fileName;
                $uploadOk = false;
                break;
            }
        }

        if ($uploadOk) {
            $filePathsStr3 = implode(',', $filePathsd); 
            $sql = "INSERT INTO current (userid, ptype, pid, recordimg, startdate, enddate) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isisss", $userid3, $ct3, $pid3, $filePathsStr3, $startdate3, $enddate3);

            if ($stmt->execute()) {
                echo "<script>alert('New record created successfully');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
?>

    </div>



    <div id="maintenanceBillForm" class="subformcontent-section container mt-5" style="display: none;">
    <h1 class="text-center">Upload Maintenance Bill Details</h1>
    <form class="border rounded" method="post" enctype="multipart/form-data">
    <div class="row align-items-center p-2">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="userId" name="userId" value="<?php echo $_SESSION['myuser'] ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="propertyId" name="propertyId" placeholder="Enter Property ID" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="startdate" name="startdate" placeholder="Enter Start Date:yyyy-mm-dd" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="enddate" name="enddate" placeholder="Enter End Date:yyyy-mm-dd" required>
                    </div>
                </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                   <div class="mb-3">
                          <input type="file" class="form-control" id="fileInput" name="maintfile[]" multiple required>
                   </div>
                </div>

                <div class="col-md-6">
                   <div class="mb-3">
                   <select class="form-select" id="dropdownSelect" name="choosetype4">
                        <option selected disabled>Choose type of property</option>
                        <option>Domestic</option>
                        <option>Commercial</option>
                     </select>
                   </div>
                </div>
            </div>
        
        </div>
       
        <div class="col-md-3 offset-md-4 ">
            <button type="submit" class="btn btn-primary w-100" name="maintainance">Upload</button>
        </div>
    </div>
</form>
<?php
include("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['maintainance'])) {
    $userid4 = $_SESSION['myuser'];
    $pid4 = $_POST['propertyId'];
    $startdate4 = $_POST['startdate'];
    $enddate4 = $_POST['enddate'];
    
    if (!isset($_POST['choosetype4']) || empty($_POST['choosetype4'])) {
        echo "<script>alert('Please select the type of property.');</script>";
        exit();
    }

    $choosetype4 = $_POST['choosetype4'];
    $ct4 = ($choosetype4 == "Domestic") ? "d" : "c";

    $targetDirectory = "records/maintainancerecord/";
    $filePathsd = [];
    $uploadOk = true;

    // Check if the target directory exists and create it if not
    if (!file_exists($targetDirectory)) {
        if (!mkdir($targetDirectory, 0777, true)) {
            echo "<script>alert('Failed to create target directory.');</script>";
            $uploadOk = false;
        }
    }

    // Check if the directory is writable
    if (!is_writable($targetDirectory)) {
        echo "<script>alert('Target directory is not writable.');</script>";
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (is_array($_FILES['maintfile']['tmp_name'])) {
            foreach ($_FILES['maintfile']['tmp_name'] as $key => $tmpName) {
                $fileName = basename($_FILES['maintfile']['name'][$key]);
                $targetFile = $targetDirectory . $fileName;

                // Move the uploaded file to the specified directory
                if (move_uploaded_file($tmpName, $targetFile)) {
                    $filePathsd[] = $targetFile;
                } else {
                    echo "Error uploading file: " . $fileName;
                    $uploadOk = false;
                    break;
                }
            }

            if ($uploadOk) {
                $filePathsStr4 = implode(',', $filePathsd);
                $sql = "INSERT INTO maintainance(userid, ptype, pid, recordimg, startdate, enddate) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("isisss", $userid4, $ct4, $pid4, $filePathsStr4, $startdate4, $enddate4);

                if ($stmt->execute()) {
                    echo "<script>alert('New record created successfully');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            echo "<script>alert('No files were uploaded.');</script>";
        }
    }
}
?>


   

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function showForm(formId) {
            document.querySelectorAll('.subformcontent-section').forEach(function(section) {
                section.style.display = 'none';
            });
            document.getElementById(formId).style.display = 'block';
        }
    </script>







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



 




  </script>

</body>

</html>
