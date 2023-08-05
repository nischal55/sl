<?php
include "dbconfig.php";
$sql = "select * from cc_country";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country | Index</title>
</head>

<body>
    <div class="content">
        <h2>Country List</h2>
        <a href="create.php">Add Country</a>

        <hr>
        <table border="1" style="border-collapse: collapse;" cellpadding="2">
            <thead>
                <th>s.no.</th>
                <th>Name</th>
                <th>Code</th>
                <th colspan=" 3">Action</th>
            </thead>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $counter = 1;
                while ($row = mysqli_fetch_assoc($result)) {

                    $country_id = $row['country_id'];
                    $country_name = $row['country_name'];
                    $country_code = $row['country_code'];
            ?>
                    <tbody>
                        <tr>
                            <td><?php echo ($counter) ?></td>
                            <td><?php echo ($country_name) ?></td>
                            <td><?php echo ($country_code) ?></td>
                            <td><a href="edit.php?country_id=<?php echo ($country_id) ?>">Edit</a></td>
                            <td><a href="view.php?country_id=<?php echo ($country_id) ?>">View</a></td>
                            <td><a href="delete.php?country_id=<?php echo ($country_id) ?>">Delete</a> </td>
                        </tr>
                    </tbody>
            <?php
                    $counter = $counter + 1;
                }
            } ?>
        </table>
    </div>
</body>

</html>