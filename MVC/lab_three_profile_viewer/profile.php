<?php
//control statement
$flag = "dav";
$college_name = "";
$title = "";
$contact = "";
$email = "";

if ($flag == "dav") {
    $college_name = "DAV College";
    $title = "You are viewing the profile of" . $college_name;
    $email = "dav@college.gmail.com";
    $contact = "529029";
    $location = "Lalitpur,Nepal";
}
if ($flag == "texas") {
    $college_name = "TEXAS College";
    $title = "You are viewing the profile of" . $college_name;
    $email = "texas@college.gmail.com";
    $contact = "539039";
    $location = "Kathmandu,Nepal";
}
$profile_status = "bronze";
$star = "";
$star_title = "";
if ($profile_status == "gold") {
    $star = 5;
    $star_title = "GOLDUSER";
} else if ($profile_status == "bronze") {
    $star = 3.4;
    $star_title = "bronze user";
} else if ($profile_status == "silver") {
    $star = 2.5;
    $star_title = "silver user";
} else {
    $star_title = "Beginner";
    $star = 1;
}

$is_followed = "followed";
if ($is_followed == "followed") { ?>
    <button>Unfollow</button>
<?php
} else { ?>
    <button>follow</button>
<?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://www.freeiconspng.com/thumbs/website-icon/website-icon-1.png">
    <title>Profile Viewer</title>
</head>

<body>
    <div class="content">

        <?php if ($flag == "dav") { ?>
            <h1><?php echo ($title); ?></h1>
            <hr>
            <div>
                <h1><?php echo ($college_name) ?></h1>
                <h3>Location: <?php echo ($location) ?></h3>
                <h3>contact: <?php echo ($contact) ?> </h3>
                <h3>Email:<?php echo ($email) ?></h3>
                <h3>profile_star : <?php echo ($star_title) ?></h3>
                <h3>Rating: <?php echo ($star) ?></h3>
            </div>


        <?php } else { ?>
            <h1><?php echo ($title); ?></h1>
            <hr>
            <div>
                <h1><?php echo ($college_name) ?></h1>
                <h3>Location: <?php echo ($location) ?></h3>
                <h3>contact: <?php echo ($contact) ?> </h3>
                <h3>Email:<?php echo ($email) ?></h3>
                <h3>profile_star : <?php echo ($star_title) ?></h3>
                <h3>Rating: <?php echo ($star) ?></h3>
            </div>


        <?php
        }
        $day = "";
        $val = 1;
        $date = "23 march 2023";
        switch ($val) {
            case 1:
                $day = "Sunday";
                break;
            case 2:
                $day = "Monday";
                break;
            case 3:
                $day = "Tuesday";
                break;
            case 4:
                $day = "Wednesday";
                break;
            case 5:
                $day = "Thursday";
                break;
            case 6:
                $day = "Friday";
                break;
            case 7:
                $day = "Saturday";
                break;

            default:
                echo ("Invalid Input");
                break;
        }


        ?>
        <h3>
            <?php echo ($date . " ," . $day) ?>
        </h3>


    </div>
</body>

</html>