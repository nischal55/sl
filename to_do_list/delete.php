<?php
include "config.php";
$id = $_GET['id'];

$sql = "DELETE FROM to_do_list where ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header('location:home.php');
} else {
    header('failed To delete data');
}
