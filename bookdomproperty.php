<?php
include("dbconnection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['did']) && isset($_SESSION['myuser'])) {
        $did = intval($_POST['did']);
        $User_id = $_SESSION['myuser'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        // Validate input dates
        if (strtotime($startDate) && strtotime($endDate) && $startDate < $endDate) {
            $query = "INSERT INTO bookdom (userid, did, startdate, enddate) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('iiss', $User_id, $did, $startDate, $endDate);

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
    echo "";  //Invalid request method.
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Book Domestic Property</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Book Domestic Property</h2>
        <form action="bookdomproperty.php?id=<?php echo htmlspecialchars($_GET['id']); ?>" method="post" class="border p-4" style="border-radius: 50px" novalidate>
            <input type="hidden" name="did" value="<?php echo htmlspecialchars($_GET['id']); ?>">
            <div class="form-group">
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="startDate" required>
            </div>
            <div class="form-group">
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="endDate" required>
            </div>
            <button type="submit" class="btn btn-primary" name="book_dom" value="book">Book</button>
        </form>
    </div>
    <!-- Include Bootstrap JS (optional, if needed) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
