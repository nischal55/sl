<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card p-5  mt-5">
                    <h2 class="text-center pb-3">Check Team Availability</h2>

                    <form action="function.php" method="post">
                        <label for="group_name">Group Name:</label><br>
                        <input type="text" name="group_name" class="form-control"><br><br>
                        <label for="team_name">Team Name:</label><br>
                        <input type="text" name="team_name" class="form-control"><br>
                        <input type="submit" value="Check" name="check" class="btn btn-primary col-md-12">
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>