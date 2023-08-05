<?php
$user_data = [

    "ac_no" => "ac_001",
    "balance" => 20000,
    "pincode" => 1234

];

if (isset($_POST['check'])) {
    $user_ac_no = $_POST['ac_no'];
    $user_pincode = $_POST['pincode'];
    $user_flag = $_POST['flag'];
    $user_amount = $_POST['amount'];
    if ($user_pincode == $user_data['pincode']) {
        if ($user_ac_no == $user_data['ac_no']) {
            if ($user_flag == "1") {
                if ($user_amount >= $user_data['balance']) {
                    echo ("<div class='alert alert-success'>You can withdraw your amount</div>");
                } else {
                    echo ("<div class='alert alert-danger'>You cannot withdraw your amount</div>");
                }
            }
        } else {
            echo ("<div class='alert alert-danger'>Invalid Password or username</div>");
        }
    } else {
        echo ("<div class='alert alert-danger'>Invalid Password or username</div>");
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
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-center p-3 ">Data check Form</h1>
                <form action="index.php" method="post">
                    <label for="ac_no">Ac_no:</label><br>
                    <input type="text" name="ac_no" class="form-control"><br>
                    <label for="pincode">Pin code:</label><br>
                    <input type="number" name="pincode" class="form-control"><br>
                    <label for="flag">flag:</label><br>
                    <select name="flag" class="form-control">
                        <option value="1">withdraw</option>
                    </select><br>
                    <label for="amount">Amount:</label><br>
                    <input type="number" name="amount" class="form-control"><br><br>
                    <input type="submit" value="check" class="btn btn-success col-md-12" name="check">

                </form>
            </div>
            <div class=" col-md-4">
            </div>
        </div>

    </div>
    </form>
</body>

</html>