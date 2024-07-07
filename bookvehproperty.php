<?php
include("dbconnection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['vid']) && isset($_SESSION['myuser'])) {
        $vid = intval($_POST['vid']);
        $User_id = $_SESSION['myuser'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        // Validate input dates
        if (strtotime($startDate) && strtotime($endDate) && $startDate < $endDate) {
            $query = "INSERT INTO bookveh (userid, vid, startdate, enddate) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('iiss', $User_id, $vid, $startDate, $endDate);

            if ($stmt->execute()) {
                echo "<script>alert('Booking successful!');
                window.location.href = 'client_panel.php';
                </script>";
                
            } else {
                echo "Booking failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Invalid dates provided.";
        }
    } else {
        echo "Required parameters are missing.";
    }
} else {
    echo "";  //invalid request method
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Book vehicle </title>
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Book Commercial Property</h2>
        <form action="bookvehproperty.php?id=<?php echo htmlspecialchars($_GET['id']); ?>" method="post" class="border p-4" style="border-radius: 50px" novalidate>
            <input type="hidden" name="vid" value="<?php echo htmlspecialchars($_GET['id']); ?>">
            <div class="form-group">
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="startDate" required>
            </div>
            <div class="form-group">
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="endDate" required>
            </div>
            <button type="submit" class="btn btn-primary" name="book_veh" value="book">Book</button>
        </form>
    </div>
    <!-- Include Bootstrap JS (optional, if needed) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
