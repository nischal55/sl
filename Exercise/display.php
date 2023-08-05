<?php
include "db.php";

$sql = "SELECT * FROM std_table";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <title>Display | student</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mt-5">
                <h3 class="text-center">Student list</h3><br><br>
                <form action="searchResults.php" method="post">
                    <div class="row mb-4">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <input type="search" name="search" placeholder="search" class="form-control col-8" id="search">
                        </div>
                        <div class="col-5">
                            <input type="submit" value="search" name="serachBtn" class="btn btn-success col-4">
                        </div>
                    </div>
                </form>
                <table class="table table-striped">
                    <tr>
                        <th>Student No</th>
                        <th>Student Name</th>
                        <th>contact</th>
                        <th>Faculty</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo ($row['std_id']); ?> </td>
                            <td><?php echo ($row['std_name']); ?> </td>
                            <td><?php echo ($row['std_contact']); ?> </td>
                            <td><?php echo ($row['faculty']); ?> </td>

                        </tr>



                    <?php
                    }


                    ?>
                </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

</body>

</html>