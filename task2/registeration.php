<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "student_425";

$conn = mysqli_connect($host, $user, $password, $db_name) or die();

if (isset($_POST['submit'])) {
    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $academicInstitution = $_POST['academic_institution'];
    $current_degree = $_POST['current_degree'];
    $board = $_POST['board'];
    $course = $_POST['course'];
    $shift = $_POST['shift'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `tbl_student`(`full_name`, `middle_name`, `last_name`, `email_id`, `contact_no`, `academic_institution`, `current_degree`, `board`, `course`, `shift`, `message`) VALUES ('$firstname','$middlename','$lastname','$email','$contact','$academicInstitution','$current_degree','$board','$course','$shift','$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo ("data inserted");
    } else {
        echo ("data insertion fail");
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
    <title>Registration | Task</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                <div class="card p-5">
                    <h2 class="text-center mb-4">Student Registration</h2>
                    <form action="registeration.php" method="post">
                        <h3 class="text-center">Personal Details</h3>
                        <label for="fullname">First Name:</label>
                        <input type="text" name="first_name" class="form-control"><br>
                        <label for="fullname">Middle Name:</label>
                        <input type="text" name="middle_name" class="form-control"><br>
                        <label for="fullname">Last Name:</label>
                        <input type="text" name="last_name" class="form-control"><br>
                        <label for="email">Email Id:</label>
                        <input type="email" name="email" class="form-control"><br>
                        <label for="contact">Contact No:</label><br>
                        <input type="text" name="contact" class="form-control"><br>
                        <h3 class="text-center">Academic Details</h3>
                        <label for="see">Academic Institution:</label><br>
                        <input type="text" name="academic_institution" class="form-control"><br>
                        <label for="see">Current Degree:</label><br>
                        <input type="text" name="current_degree" class="form-control"><br>
                        <label for="password">Board:</label><br>
                        <input type="text" name="board" class="form-control"><br>
                        <h3 class="text-center">Course Details</h3>
                        <select name="course" id="" class="form-control">
                            <option value="BCA">BCA</option>
                            <option value="BBA">BBA</option>
                            <option value="BBS">BBS</option>
                        </select><br>
                        <label for="shift">Shift:</label><br>
                        <input type="text" name="shift" class="form-control"><br>
                        <label for="message">Message:</label><br>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="message" class="form-control"></textarea>
                        <input type="submit" value="Submit" name="submit" class="col-md-12 btn btn-success mt-5">
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>