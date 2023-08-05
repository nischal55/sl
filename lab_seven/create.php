<?php
include "dbconfig.php";
if (isset($_POST['btnCreate'])) {
    $country_name = $_POST['country_name'];
    $country_code = $_POST['country_code'];

    $sql = "INSERT INTO cc_country(country_name,country_code)VALUES('$country_name','$country_code')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo ("Data Successfully Inserted");
    } else {
        echo ('Data Insertion failed');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country | Create</title>
</head>

<body>


    <body>
        <div class="container">
            <h2>ADD Country
                <hr>
                <a href="index.php">Back</a>
            </h2>
            <form action="" method="POST">
                <div class="form-input">
                    <label for="country_name">Country Name:</label>
                    <input type="text" name="country_name">
                </div>
                <div class="form-input">
                    <label for="country_code">Country Code:</label>
                    <input type="text" name="country_code">
                </div>
                <input type="submit" name="btnCreate" value="ADD">
            </form>
        </div>
    </body>

</html>