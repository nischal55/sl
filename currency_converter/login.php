<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    $username_user_saved = "Nischal65";
    $password_user_saved = "Nischal123";
    $username_admin_saved = "admin";
    $password_admin_saved = "admin";

    switch ($userType) {
        case 1: {
                if ($username == $username_admin_saved) {
                    if ($password == $password_admin_saved) {
                        header("location:adminDash.php?username=$username");
                        break;
                    } else {
                        echo ("Login failed");
                    }
                } else {
                    echo ("login Failed");
                }
            }
        case 2: {
                if ($username == $username_user_saved) {
                    if ($password == $password_user_saved) {
                        header("location:userDash.php?username=$username");
                        break;
                    } else {
                        echo ("Login failed");
                    }
                } else {
                    echo ("login Failed");
                }
            }
    }
    die();
    exit();
}



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
    <form method="post" action="login.php">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <label for="userType">User Type:</label>
        <select name="userType" id="">
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select><br><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>

</html>