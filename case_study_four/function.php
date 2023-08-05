<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>

</body>

</html>
<?php
if (isset($_POST['check'])) {
    checkStatus();
}

function checkStatus()
{
    $groups = [
        "group_one" => ["teamA", "TeamB", "TeamC"],
        "group_two" => ["teamD", "TeamE", "Team_f"]
    ];
    $group_name = $_POST['group_name'];
    $team_name = $_POST['team_name'];


    for ($i = 0; $i < count($groups); $i++) {
        if ($group_name == "group_one") {
            for ($j = 0; $j < count($groups[$group_name]); $j++) {
                if ($groups[$group_name][$j] == $team_name) {
                    echo ("<div class='card p-5'><div class='alert alert-success'>Booked!</div></div>");
                    break;
                } else {
                    echo ("<div class='card p-5'><div class='alert alert-danger'>Not Booked!</div></div>");
                }
            }
            break;
        }
        if ($group_name == "group_two") {
            for ($j = 0; $j < count($groups[$group_name]); $j++) {
                if ($groups[$group_name][$j] == $team_name) {
                    echo ("<div class='card p-5'><div class='alert alert-success'>Booked!</div></div>");
                    break;
                } else {
                    echo ("<div class='card p-5'><div class='alert alert-danger'>Not Booked!</div></div>");
                }
            }
            break;
        }
    }
}
