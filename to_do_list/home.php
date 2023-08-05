<?php
include "config.php";
if (isset($_POST['submit'])) {
    $data = $_POST['task'];
    $sql = "INSERT INTO to_do_list(list)values('$data');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo ("Successfully Inserted");
    } else {
        echo ("Failed to Insert");
    }
}
$display = "SELECT * FROM to_do_list";
$result2 = mysqli_query($conn, $display);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>To do list</h3>
    <form action="home.php" method="post">
        <input type="text" placeholder="Enter Your List" name="task">
        <input type="submit" value="ADD" name="submit"><br><br>

    </form>
    <br>
    <table border=1 cellpadding=3 style="border-collapse:collapse;">
        <tr>
            <th>ID</th>
            <th>List</th>
            <th colspan="2">Actions</th>
        </tr>

        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result2)) {


        ?>
            <tr>
                <td><?php echo ($i);
                    $i++; ?></td>
                <td><?php echo ($row['list']) ?></td>
                <td><a href="delete.php?id=<?php echo ($row['ID']); ?>">Delete</a></td>
                <td><a href="update.php?id=<?php echo ($row['ID']) ?>">Update</a></td>
            </tr>


        <?php

        }


        ?>
    </table>
</body>

</html>