<?php
include("dbconnection.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the ID

    $query = "DELETE FROM addcommercial WHERE cid=$id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        echo "Record deleted successfully";
    }
} else {
    echo "No ID provided";
}
?>
