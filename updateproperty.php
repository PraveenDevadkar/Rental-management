<?php
include("dbconnection.php");

$id = null;  // Initialize $id to null
$row = [];   // Initialize $row to an empty array

// Enable detailed error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fetch the existing record if an ID is provided in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convert to integer for security

    $query = "SELECT * FROM adddomestic WHERE did=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        $row = $result->fetch_assoc();
        if (!$row) {
            die("Record not found.");
        }
    }
}

// Update the record if the form is submitted
if (isset($_POST['update_dom'])) {
    $id = intval($_POST['id']); // Ensure the ID is properly passed and sanitized
    $size = $_POST['dsize'];
    $rent = $_POST['drent'];
    $address = $_POST['daddress'];

    // Use prepared statements to prevent SQL injection
    $query = "UPDATE adddomestic SET dsize=?, drent=?, daddress=? WHERE did=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sdsi', $size, $rent, $address, $id);
    $result = $stmt->execute();

    if (!$result) {
        die("Query failed: " . $stmt->error);
    } else {
        echo "<script> 
        alert('Record updated successfully');
        window.location.href = 'owner_panel.php';
        </script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Record</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Update Domestic Record</h2>
        <form action="updateproperty.php?id=<?php echo htmlspecialchars($id); ?>" method="post" class="border p-4" style="border-radius: 50px" novalidate>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <div class="form-group">
                <label for="dsize">Size:</label>
                <input type="text" class="form-control" name="dsize" autocomplete="off" value="<?php echo isset($row['dsize']) ? htmlspecialchars($row['dsize']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="daddress">Address:</label>
                <input type="text" class="form-control" name="daddress" value="<?php echo isset($row['daddress']) ? htmlspecialchars($row['daddress']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="drent">Rent:</label>
                <input type="number" class="form-control" name="drent" value="<?php echo isset($row['drent']) ? htmlspecialchars($row['drent']) : ''; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="update_dom" value="update">Save changes</button>
        </form>
    </div>
    <!-- Include Bootstrap JS (optional, if needed) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
