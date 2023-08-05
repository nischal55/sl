<?php
$otp = "1234";
if (isset($_POST['check'])) {
    $input_otp = $_POST['otp'];
    if ($input_otp == $otp) {
        header('location:dashboard.php');
    } else {
        echo ('<div class="alert alert-danger">Invalid OTp!!!</div>');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>login page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 border p-3 mt-5">
                <h1 class="text-center">Enter OTP:</h1>
                <form action="otpCheck.php" method="post">
                    <label for="password">OTP:</label><br>
                    <input type="text" name="otp" class="form-control"><br>
                    <input type="submit" name="check" value="check" class="btn btn-success col-md-12">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>