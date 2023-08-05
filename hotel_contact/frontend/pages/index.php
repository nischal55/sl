<?php
include "../../backend/display.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Contact | Index</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card p-5 mt-4">
                    <h3 class="text-center">Hotel Contact Info</h3>
                    <br>
                    <table class="table mt-5 table-striped">
                        <tr>
                            <th>Hotel_id</th>
                            <th>Hotel Name</th>
                            <th>Hotel Address</th>
                            <th>Hotel Contact</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <tr>
                                <td><?php echo ($row['hotel_id']) ?></td>
                                <td><?php echo ($row['hotel_name']) ?></td>
                                <td><?php echo ($row['hotel_address']) ?></td>
                                <td><?php echo ($row['hotel_contact']) ?></td>
                            </tr>

                        <?php
                        }
                        ?>
                    </table>
                    <a href="insert.php" class="btn btn-primary text-center col-12 mt-4">Insert New Data</a>


                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

</body>

</html>