$(document).ready(function () {
  $("#login").click(function () {
    $.post(
      "../../../backend/functions/login_module.php",
      {
        username: $("#username").val(),
        password: $("#password").val(),
        funName: "login_function",
      },
      function (data, status) {
        console.log(status);
        if (data == "login_success") {
          window.location.href = "../index.php";
        } else {
          $("#message").html('<div class="alert alert-danger">Invalid Username or Password !! </div>');
        }
      }
    );
    $("#username").val("");
    $("#password").val("");
  });
});