<?php
session_start();

if ($_SESSION['login_status'] != "active") {
    header('location:Authentication/login.php');
}

$title = "Lab one - Introduction to PHP";
$step_one = "Installation Process";
$composer_step = "Composer Installation Process";
$xampp_step = "Xampp Installation process";
$xampp_installation_process_link = "https://www.javatpoint.com/installation-process-of-xampp";
$vscode_downlaod = "wwww.vscode.com/downloads";
$composer_download = "www.composer.com";
$xampp_download = "https://www.apachefriends.org/";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is PHP INTRO page</h1>
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $step_one; ?></h2>
    <hr>
    <h3>Vs code download Link</h3>
    <a href="<?php echo $vscode_downlaod ?>" target="_blank">Click Here</a><br>
    <hr>
    <h3>Composer download Link</h3>
    <a href="<?php echo $composer_downlaod ?>" target="_blank">Click Here</a><br>
    <hr>
    <h3>Xampp download Link</h3>
    <a href="<?php echo $xampp_downlaod ?>" target="_blank">Click Here</a><br>
</body>



</html>