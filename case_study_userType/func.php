<?
if (isset($_POST['login'])) {
    $connect = mysqli_connect('localhost', 'root', '', 'tbl_users');

    $req_email = $_POST['email'];
    $req_password = $_POST['password'];
    $req_usertype = $_POST['userType'];

    $sql = "SELECT email,userType,password from tbl_users where email='$req_email'";
    
} else {
}
