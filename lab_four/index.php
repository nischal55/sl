<?php

function getTagName($data)
{
    $array = ["danger", "success", "info", "warnining"];
    $tagname = "";
    switch ($data) {
        case 1:
            $tagname = $array[0];
            break;
        case 2:
            $tagname = $array[1];
            break;
        case 3:
            $tagname = $array[2];
            break;
        case 4:
            $tagname = $array[3];
    }
    return $tagname;
}
if (isset($_POST['result'])) {
    $num_one = $_POST['num_one'];
    $num_two = $_POST['num_two'];
    $action = $_POST['action'];
    $ans = "";
    function doSum($num_one, $num_two)
    {
        $result = $num_one + $num_two;
        return $result;
    }
    function doSubs($num_one, $num_two)
    {
        $result = $num_one - $num_two;
        return $result;
    }
    function doMul($num_one, $num_two)
    {
        $result = $num_one * $num_two;
        return $result;
    }
    function doDiv($num_one, $num_two)
    {
        $result = $num_one / $num_two;
        return $result;
    }
    switch ($action) {
        case "add":
            $ans = doSum($num_one, $num_two);
            echo ("<div class='alert alert-success'>Ans is $ans</div>");
            break;
        case "substract":
            $ans = doSubs($num_one, $num_two);
            echo ("<div class='alert alert-success'>Ans is $ans</div>");
            break;
        case "multiply":
            $ans = doMul($num_one, $num_two);
            echo ("<div class='alert alert-success'>Ans is $ans</div>");
            break;
        case "division":
            $ans = doDiv($num_one, $num_two);
            echo ("<div class='alert alert-success'>Ans is $ans</div>");
            break;
        default:
            echo ("select valid option");
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
    <title>Document</title>
</head>

<body>
    <div class="container pt-5">
        <div class="card p-5 col-md-4">
            <form action="index.php" method="post">
                <input type="number" name="num_one" class="form-control" placeholder="Enter Number One:"><br>
                <input type="number" name="num_two" class="form-control" placeholder="Enter Number Two:"><br>
                <select name="action" class="form-control text-center">
                    <option value="">--Select the action--</option>
                    <option value="add">ADD</option>
                    <option value="substract">SUBSTRACT</option>
                    <option value="multiply">MULTIPLY</option>
                    <option value="division">DIVISION</option>
                </select><br>
                <input type="submit" name="result" value="Result" class="col-md-12 btn btn-success">
            </form>
        </div>
    </div>

</body>

</html>