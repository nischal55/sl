<?php
if (isset($_POST['submit'])) {
    insertData();
}

function insertData()
{
    include "config.php";
    $hotel_name = $_POST['hotel_name'];
    $hotel_address = $_POST['hotel_address'];
    $hotel_contact = $_POST['hotel_contact'];

    $sql = "INSERT INTO contact_dairy(hotel_name,hotel_address,hotel_contact)values('$hotel_name','$hotel_address','$hotel_contact')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:../frontend/pages/index.php');
    } else {
        echo ("Error Inserting Data");
    }
}
