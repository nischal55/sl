<?php
include "dbconfig.php";
$country_id = $_GET['country_id'];
$sql = "SELECT* from cc_country where country_id = '$country_id'";
$result = mysqli_query($conn, $sql);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country | Details</title>
</head>

<body>
    <div class="content">
        <h1>Country Details</h1>
        <hr>
        <a href="index.php">BACK</a>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $country_name = $row['country_name'];
                $country_code = $row['country_code'];
        ?>
                <h1>
                    Country Name:<?php echo ($country_name) ?>
                </h1>
                <hr>
                <h4>Code: <?php echo ($country_code) ?></h4>
        <?php }
        } ?>
    </div>
</body>

</html>