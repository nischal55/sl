<?php
$functionName = $_POST['funName'];

if ($functionName == "login_function") {
    login_function();
}

function login_function()
{
    $username = "Nischal65";
    $password = "Nischal123";
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    if ($username == $input_username) {
        if ($password == $input_password) {
            echo ("login_success");
            session_start();
            $_SESSION['login_status'] = "active";
        } else {
            echo ("login_fail");
        }
    }
}
