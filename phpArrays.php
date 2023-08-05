<?php
/*
    Arrays in PHP
    Three types of Array
    1. Indexed Array
    2. Associative Array
    3. Multi-dimensional Array
 */

//defining Array
//1. Empty Array
$data = array();
$data = [];

//2. with data
$lakes = array("Dev lake", "devis lake", "phewa", "rara");
$sport = ["football", "Cricket", "volleyball"];

//Associative Array
//key value pair
//key must be unique
$student_details = array(
    "student_id" => 1,
    "student_name" => "DEV",
    "student_email" => "dev@gmail.com",
    "student_dob" => "2058-01-14",
    "student_address" => "kamalbinayak"
);
$student_list = array(
    array(1, "Dev", "kamalbinayak"),
    array(2, "Mr dev", "BhatkyaPati"),
    array(2, "Devle", "muldhoka")
)

//sorting the arrays
/*
    sort-> in the ascending order
    rsort=> descending order
    asort()-> ascendinng order of the associative array by value
    kort()-> ascendinng order of the associative array by key
    arsort()-> descendinng order of the associative array by value
    krsort()-> descendinng order of the associative array by key
    
    
    */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel=icon type="image/png" href="https://img.freepik.com/free-vector/illustration-social-media-concept_53876-40881.jpg?w=740&t=st=1679979504~exp=1679980104~hmac=6b1ff918d8c79e152693fab9d8600f3169b6adbf1a22d236af85eb42ae7bd470">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card-5">
            <h1>Array in PHP</h1>
            <hr>
            <h3>1. Indexed Array</h3>
            <p>Example One</p>
            <hr>
            <p>Lakes of Nepal</p>
            <?php

            for ($i = 0; $i < 4; $i++) { ?>
                <h4>Name of the lake: <?php echo ($lakes[$i]) ?></h4>
            <?php
            }
            ?>
            <hr>
            <?php

            for ($a = 0; $a < 3; $a++) { ?>

                <h4>Name of the sports: <?php echo ($sport[$a]) ?></h4>
            <?php
            }
            ?>
            <hr>
            <h4>Student Name is :<?php echo ($student_details['student_name']) ?></h4>
            <h4>Student email is :<?php echo ($student_details['student_email']) ?></h4>
            <h4>Student dob is :<?php echo ($student_details['student_dob']) ?></h4>
            <?php
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) { ?>
                    <h4><?php echo ($student_list[$i][$j]) ?></h4>

            <?php

                }
            }
            ?>

        </div>
    </div>
</body>

</html>