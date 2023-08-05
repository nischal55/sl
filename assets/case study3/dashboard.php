<?php session_start(); ?>
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
                <h1 class="text-center">Dashboard</h1>
                <h5 class="text-center">Welcome <?php echo ($_SESSION['name']) ?></h5><br>
                <label for="name">Name:<?php echo ($_SESSION['name']) ?> </label><br><br>
                <label for="username">Username:<?php echo ($_SESSION['name']) ?></label><br><br>
                <a href="login.php" class="btn btn-danger col-md-12">logout</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>