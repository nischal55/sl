<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="func.php" method="POST">
        <input type="text" name="email"><br>
        <input type="password" name="password"><br>
        <select name="userType">
            <option value="admin">Admin:</option>
            <option value="user">User:</option>
        </select>
        <br>
        <input type="submit" value="Login">

    </form>
</body>

</html>