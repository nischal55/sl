<?php
$user_details = [
    "name" => "Nischal",
    "username" => "admin",
    "password" => "admin"
];
if (isset($_POST['clicked'])) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    if ($input_username == $user_details['username']) {
        if ($input_password == $user_details['password']) {
            session_start();
            $_SESSION['name'] = $user_details['name'];
            $_SESSION['username'] = $user_details['username'];
            header('location:otpCheck.php');
        } else {
            echo ('<div class="alert alert-danger">Invalid Username or password!!!</div>');
        }
    } else {
        echo ('<div class="alert alert-danger">Invalid Username or password!!!</div>');
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
                <h1 class="text-center">Login form</h1>
                <form action="login.php" method="post">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" class="form-control"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" class="form-control"><br>
                    <input type="submit" value="Login" name="clicked" class="btn btn-success col-md-12">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>