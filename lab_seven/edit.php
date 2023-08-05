<?php
include "dbconfig.php";
$country_id = $_GET['country_id'];
$sql = "SELECT * from cc_country where country_id = '$country_id'";
$result = mysqli_query($conn, $sql);

if (isset($_POST['btnCreate'])) {
    $u_countryName = $_POST['country_name'];
    $u_countrycode = $_POST['country_code'];
    $u_country_id = $_POST['c_id'];

    $sql2 = "UPDATE cc_country set country_name = '$u_countryName' , country_code = '$u_countrycode' where country_id='$country_id'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        header('location:index.php');
    } else {
        echo ('Update Failed');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Country | Edit</title>
</head>

<body>
    <div class="container">
        <h2>
            Update Country
            <hr>
            <a href="index.php">Back</a>
        </h2>
        <form action="" method="POST">
            <div class="form-input">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <input type="hidden" name="c_id" value="<?php echo ($row['country_id']) ?>">
                        <label for="country_name">Country Name:</label>
                        <input type="text" name="country_name" value="<?php echo ($row['country_name']) ?>">
            </div>
            <div class="form-input">
                <label for="country_code">Country Code:</label>
                <input type="text" name="country_code" value="<?php echo ($row['country_code']) ?>">
            </div>
            <input type="submit" name="btnCreate" value="UPDATE">
        </form>
<?php
                    }
                }

?>
    </div>
</body>

</html>