<?php
include "db.php";
if (isset($_POST['submit'])) {
    $full_name = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $permanent = $_POST['permanent_address'];
    $temporary = $_POST['temporary_address'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $work_history = $_POST['work_history'];

    if ($full_name == "" && $email == "" && $contact == "" && $permanent == "" && $temporary == "" && $father_name == "" && $mother_name == "" && $work_history == "") {
        echo ("Please Enter All the Fields");
    } else {
        $sql = "INSERT INTO `tbl_customer`(`full_name`, `email`, `permanent_add`, `temporary_add`, `father_name`, `mother_name`, `contact`, `work_history`) VALUES ('$full_name','$email','$permanent','$temporary','$father_name','$mother_name','$contact','$work_history')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert_status = true;
            session_start();
            $_SESSION['email'] = $email;
            header('location:dashboard.php');
        } else {
            $insert_status = false;
            header('location:login.php');
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
    <title>login | Task</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card p-5">
                    <form action="index.php" method="post">
                        <h3 class="text-center">Personal Details</h3>
                        <label for="full_name">Full Name:</label><br>
                        <input type="text" name="fullname" class="form-control" required><br>
                        <label for="email">Email Id:</label><br>
                        <input type="email" name="email" class="form-control" required><br>
                        <label for="contact">Contact:</label><br>
                        <input type="text" class="form-control" name="contact" required><br>
                        <h3 class="text-center">Address Details</h3>
                        <label for="permanent_address">Permanent Address:</label><br>
                        <input type="text" name="permanent_address" class="form-control"><br>
                        <label for="temporary_address">Temporary Address:</label><br>
                        <input type="text" name="temporary-address" class="form-control"><br>
                        <h3 class="text-center">Family Details</h3>
                        <label for="father_name">Father's Name:</label><br>
                        <input type="text" name="father_name" class="form-control" required><br>
                        <label for="father_name">Mother's Name:</label><br>
                        <input type="text" name="mother_name" class="form-control" required><br>
                        <h3 class="text-center">Work History</h3>
                        <label for="work_history">Work History:</label><br>
                        <textarea name="work_history" class="form-control" cols="30" rows="5"></textarea><br>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success col-md-12 mt-2">





                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>