<?php
if (isset($_POST['submit'])) {
    $number_one = $_POST['number_one'];
    $number_two = $_POST['number_two'];
    $operation = $_POST['operations'];
    switch ($operation) {
        case 1:
            $sum = $number_one + $number_two;
            echo ($sum);
            break;
        case 2:
            $product = $number_one * $number_two;
            echo ($product);
            break;
        case 3:
            $difference = $number_one - $number_two;
            echo ($difference);
            break;
        case 4:
            $modulas = $number_one % $number_two;
            echo ($modulas);
            break;
	default:
		echo("fail");
		break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question | One</title>
</head>

<body>
    <form action="qno1.php" method="post">
        <label for="firstNumber">First Number:</label><br>
        <input type="number" name="number_one" id="" required><br>
        <label for="secondNumber">Second Number:</label><br>
        <input type="number" name="number_two" id=""><br>
        <br>
        <select name="operations" id="">
            <option value="1">Sum</option>
            <option value="2">Product</option>
            <option value="3">Difference</option>
            <option value="4">Modulas</option>
        </select><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>