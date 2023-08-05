<?php
if (isset($_POST['funcName'])) {
    setcookie('counter', 1, time() + 10, "/");
    login();
}
function login()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sys_username = "nischal65";
    $sys_password = "nischal123";

    if ($username == $sys_username) {
        if ($password == $sys_password) {
            session_start();
            $_SESSION['username'] = $username;
            echo ("success");
        } else {
            setcookie("username", $username, time() + 60, "/");
            if ($_COOKIE['username'] == $username) {
                $cookie_modify = $_COOKIE['counter'] + 1;
                setcookie('counter', $cookie_modify, time() + 60, "/");
                if ($_COOKIE['counter'] == 3) {
                    echo ("disabled");
                }
            }
        }
    }
}
