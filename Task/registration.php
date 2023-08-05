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
                    <h2 class="text-center mb-4">User Registration</h2>
                    <form action="registration.php" method="post">
                        <label for="username">Username:</label><br>
                        <input type="text" name="username" class="form-control"><br>
                        <label for="username">Email Id:</label><br>
                        <input type="email" name="email" class="form-control"><br>
                        <label for="username">Contact No:</label><br>
                        <input type="text" name="contact" class="form-control"><br>
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" class="form-control"><br>
                        <label for="password">Confirm Password:</label><br>
                        <input type="password" name="c_password" class="form-control"><br>
                        <input type="submit" value="Submit" name="submit" class="col-md-12 btn btn-success">
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>