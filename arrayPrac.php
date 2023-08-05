<?php
//indexed Array
$student_list = array("Nischal", "Dev");


//Multi-Dimensional Array
$student_details = array(
    array("dev", "kamalbinayak"),
    array('Nischal', 'Kumaripati')
);


//Associative Array
$student_info = array(
    "student_name" => "Nischal",
    "student_address" => "Natole"
);

echo ($student_list[1] . "<br>");
echo ($student_details[1][1] . "<br>");
echo ($student_info['student_address'] . "<br>");
