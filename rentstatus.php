<?php
include ("dbconnection.php");

if (isset($_GET['id']) && isset($_GET['userid']) && isset($_GET['startdate']) && isset($_GET['enddate']) && isset($_GET['ptype']) && isset($_GET['ty'])) {



    $id = intval($_GET['id']);
    $userid = intval($_GET['userid']);
    $startdate = $_GET['startdate'];
    $enddate = $_GET['enddate'];
    $ptype = $_GET['ptype'];
    $ty = $_GET['ty'];
    
    if($ty=="water")
     {
             // Prepare the SQL query to update the status
    $sql = "UPDATE water SET status = 'paid' WHERE userid = ? AND pid = ? AND ptype = ? AND startdate = ? AND enddate = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisss", $userid, $id, $ptype, $startdate, $enddate);
    
    if ($stmt->execute()) {
        // Redirect back to the original page or provide a success message
        header("Location: owner_panel.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
     }

     elseif($ty == "rent")
     {
             // Prepare the SQL query to update the status
    $sql = "UPDATE rent SET status = 'paid' WHERE userid = ? AND pid = ? AND ptype = ? AND startdate = ? AND enddate = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisss", $userid, $id, $ptype, $startdate, $enddate);
    
    if ($stmt->execute()) {
        // Redirect back to the original page or provide a success message
        header("Location: owner_panel.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
     }

     elseif($ty == "current")
     {
             // Prepare the SQL query to update the status
    $sql = "UPDATE current SET status = 'paid' WHERE userid = ? AND pid = ? AND ptype = ? AND startdate = ? AND enddate = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisss", $userid, $id, $ptype, $startdate, $enddate);
    
    if ($stmt->execute()) {
        // Redirect back to the original page or provide a success message
        header("Location: owner_panel.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
     }


    
     elseif($ty == "maintainance")
     {
             // Prepare the SQL query to update the status
    $sql = "UPDATE maintainance SET status = 'paid' WHERE userid = ? AND pid = ? AND ptype = ? AND startdate = ? AND enddate = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisss", $userid, $id, $ptype, $startdate, $enddate);
    
    if ($stmt->execute()) {
        // Redirect back to the original page or provide a success message
        header("Location: owner_panel.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
     }


     elseif($ty == "deposit")
     {
             // Prepare the SQL query to update the status
    $sql = "UPDATE deposit SET status = 'paid' WHERE userid = ? AND pid = ? AND ptype = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $userid, $id, $ptype);
    
    if ($stmt->execute()) {
        // Redirect back to the original page or provide a success message
        header("Location: owner_panel.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
     }


   
} 

else {
    echo "Invalid parameters.";
}

$conn->close();
?>
