<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="jquery-3.6.3.min.js"></script>
    <title>Login | Task</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5">
                <div class="card p-5">
                    <h2 class="text-center mb-4 text-secondary">User Login</h2>

                    <label for="username">Username:</label><br>
                    <input type="text" name="username" class="form-control" id="username"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" class="form-control" id="password">
                    <label for="not_user" class=" mt-3">Don't Have a Account? <a href="registration.php">Register Now</a></label><br><br>
                    <input type="submit" value="Login" name="login" id="login" class="col-md-12 btn btn-success">

                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#login").click(function() {
                var username = $("#username").val();
                var password = $('#password').val();
                $.post("function.php", {
                    "username": username,
                    "password": password,
                    "funcName": "login"
                }, function(data, status) {
                    console.log(status);
                    if (data == "success") {
                        window.location.href = "dashboard.php";
                    } else if (data == "disabled") {
                        document.getElementById('login').disabled = true;
                    }
                    $("#username").val("");
                    $('#password').val("");


                })
            })
        })
    </script>
</body>

</html>