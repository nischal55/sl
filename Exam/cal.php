<?php
if (isset($_POST['submit'])) {
    $number_one = $_POST['num1'];
    $number_two = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 1:
            $ans = $number_one + $number_two;
            echo ("Sum is" . $ans);
            break;
        case 2:
            $ans = $number_one - $number_two;
            echo ("Difference is" . $ans);
            break;
        case 3:
            $ans = $number_one * $number_two;
            echo ("Multiplication is" . $ans);
            break;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cal.php" method="post">
        <input type="number" name="num1" placeholder="number_one"><br><br>
        <input type="number" name="num2" placeholder="number_two"><br><br>
        <select name="operation">
            <option value="1">Add</option>
            <option value="2">Substract</option>
            <option value="3">Multiply</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>

</html>