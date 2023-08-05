<?php
if (isset($_POST['submit'])) {
    $username = "Nischal65";
    $password = "nischal123";
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($username == $input_username) {
        if ($password == $input_password) {
            echo ("Username and password Matched");
            session_start();
            $_SESSION['username'] = $input_username;
            $_SESSION['password'] = $input_password;
            setcookie("username", $input_username, time() + 60, "/");
            setcookie("password", $input_password, time() + 60, "/");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions | qno4</title>
</head>

<body>
    <form action="qno4.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id=""><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id=""><br><br>
        <input type="submit" value="login" name="submit">
    </form>
</body>

</html>