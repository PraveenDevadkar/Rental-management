<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Payment</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 40px auto;
        }
        .qr-code img {
            width: 100%;
            max-width: 250px;
            height: auto;
        }
        .upi-id {
            font-size: 1.2em;
            font-weight: bold;
        }
        .heading {
            color: blue;
        }
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Pay Rent</h1>
        <div class="row">
            <div class="col-md-5 qr-code">
                <h3 class="text-center p-1">QR code</h3>
                <img src="Images/qr.png" alt="QR Code for Rent Payment">
            </div>
            <div class="col-md-2 center-text">
                <h2 class="heading">or</h2>
            </div>
            <div class="col-md-5 upi-id">
            <h3 class="text-center p-1 " >UPI ID</h3>
                <p > your-upi-id@bank</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
