<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    if ($number == 0 || $number == 1) {
        echo ("It is not a prime number");
    } else {
        for ($i = 2; $i <= $number / 2; ++$i) {
            if ($number % $i == 0) {
                echo ("It is not a prime number");
                break;
            } else {
                echo ("It is a prime a number");
                break;
            }
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
    <title>Question | two</title>
</head>

<body>
    <form action="qno2.php" method="post">
        <label for="number">Enter Number Greater than 2</label><br>
        <input type="number" name="number" value=""><br><br>
        <input type="submit" value="Check" name="submit">
    </form>
</body>

</html>