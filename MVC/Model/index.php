<?php
$selectInfo = $_POST['selectInfo'];
if ($selectInfo == '1') {
    selectInfo();
}

function selectInfo()
{
    $data = array();
    $conn = mysqli_connect("localhost", "root", "", "contact") or die();
    $sql = "SELECT*from dairy";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data, $row);
    }
    echo json_encode($data);
}
