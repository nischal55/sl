<?php
include "db.php";
if (isset($_POST['submit'])) {


    $image_link = $_FILES['file'];
    $file_upload_path = 'uploads/';
    $file_name = $image_link['name'];
echo $file_name;
    $file_temp = $image_link['tmp_name'];
    $file = $file_upload_path . $file_name;
    $sql = "INsert into images(image_name)values('$file_name')";
    $result = mysqli_query($conn,$sql);
    if (move_uploaded_file($file_temp, $file)) {
        echo ("File Uploaded");
    } else {
        echo ("failed");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value='submit' name="submit">
    </form>
</body>

</html>
