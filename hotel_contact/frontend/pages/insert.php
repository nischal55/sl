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
                    <form action="../../backend/functions.php" method="post">
                        <label for="hotel_name">Hotel Name:</label><br>
                        <input type="text" name="hotel_name" id="" class="form-control"><br>
                        <label for="hotel_address">Hotel Address:</label><br>
                        <input type="text" name="hotel_address" id="" class="form-control"><br>
                        <label for="hotel_contact">Hotel Contact:</label><br>
                        <input type="text" name="hotel_contact" id="" class="form-control"><br><br>
                        <input type="submit" class="btn btn-success col-12" value="Submit" name="submit"><br>
                        <a href="index.php" class="btn btn-danger text-center col-12 mt-4">View Data</a>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

</body>

</html>