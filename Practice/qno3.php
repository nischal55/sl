<?php

if (isset($_POST['submit'])) {
    $radius = $_POST['radius'];
    areaOfCircle($radius);
}
function areaOfCircle($number)
{
    $area = 3.14 * $number * $number;
    echo ($area);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question| Three</title>
</head>

<body>
    <form action="qno3.php" method="post">
        <label for="radius">Radius:</label><br>
        <input type="number" name="radius" id=""><br><br>
        <input type="submit" value="Calculate" name="submit">
    </form>
</body>

</html>