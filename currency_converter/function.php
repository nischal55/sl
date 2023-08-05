<?php
if (isset($_POST['convert'])) {
    $amount = $_POST['amount'];
    $converted_amt  = "";
    $error_message = "";
    if ($amount == "") {
        $error_message = "Please enter the amount field!!!";
    } else {

        $country = $_POST['country'];
        switch ($country) {
            case 1:
                $converted_amt = $amount * 16;
                break;
            case 2:
                $converted_amt = $amount * 1.6;
                break;
            case 3:
                $converted_amt = $amount * 129;
                break;
            case 4:
                $converted_amt = $amount * 169;
                break;
            case 5:
                $converted_amt = $amount * 93;
                break;
            case 6:
                $converted_amt = $amount * 0.93;
                break;
            default:
                echo ("Please select the valid country");
                break;
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
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Result</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card p-5">
            <?php if ($error_message != "") { ?>
                <div class="alert alert-warning">
                    <?php echo ($error_message) ?>
                </div>
                <a href="index.php" class="btn btn-danger col-12">Try Again</a>
            <?php
            } ?>
            <?php if ($converted_amt != "") { ?>
                <div class="alert alert-success">
                    <?php echo ("The converted amount is NRS." . $converted_amt) ?>
                </div>
                <a href="index.php" class="btn btn-success col-12">Try Again</a>
            <?php
            } ?>

        </div>
    </div>

</body>

</html>