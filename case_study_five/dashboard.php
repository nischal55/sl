<?php
if (isset($_SESSION['email'])) {
    echo ($_SESSION['email']);
} else {
    header('location:login.php');
}
