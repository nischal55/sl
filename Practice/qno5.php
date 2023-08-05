<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "std_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);
?>
<?php

if (isset($_POST['submit'])) {
    $std_name = $_POST['std_name'];
    $std_contact = $_POST['std_contact'];
    $faculty = $_POST['faculty'];

    $sql = "INSERT INTO std_table(std_name,std_contact,faculty)values('$std_name','$std_contact','$faculty')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Insertion Success";
    } else {
        echo ('Fail to INsert');
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
    <title>form | Student</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card p-5 mt-5">
                    <h3 class="text-center">Student Form</h3>
                    <form action="qno5.php" method="post">
                        <label for="student_name">Student Name:</label><br>
                        <input type="text" name="std_name" id="" class="form-control"><br>
                        <label for="student_contact">Student Contact:</label><br>
                        <input type="text" name="std_contact" id="" class="form-control"><br>
                        <label for="faculty">Faculty:</label>
                        <select name="faculty" id="" class="form-control">
                            <option value="BCA">BCA</option>
                            <option value="BBA">BBA</option>
                        </select><br>
                        <input type="submit" value="Submit" name="submit" class="btn btn-success col-12">
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>